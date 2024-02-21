<?php

namespace App\Controllers;

use App\Core\RenderBase;
use App\Models\AssignmentModel;
use App\Models\TaskModel;
use App\Models\UserModel;

class AssignmentController extends BaseController
{

    private $_renderBase;

    /**
     * Thuốc trị đau lưng
     * Copy lại là hết đau lưng
     * 
     */
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
        //$this->AssignmentController();
    }

    function AssignmentController()
    {
        $this->assignmentPage();
    }

    function assignmentPage()
    {
        //$this->_renderBase->renderHeader();
        $assignmentModel = new AssignmentModel;
        $assignmentModelPage = $assignmentModel->getAllAssignment();
        $this->_renderBase->renderSidebar();
        $this->load->render('client/assignment', $assignmentModelPage);
    }

    public function creatdAssignment($id)
    {
        $taskModel = new TaskModel;
        $getOne = $taskModel->getOneTask($id);
        $userModel = new UserModel;
        $user = $userModel->getAllUser();
        $data = [
            'task' => $getOne,
            'users' => $user,
        ];
        $this->_renderBase->renderSidebar();
        $this->load->render('client/creatd_assignment', $data);
    }

    public function insertAssignment($id)
    {
        $assignmentModel = new AssignmentModel();
        $_POST['tasks_id'] = $id;
        $assignmentModel->insertAssignmentModel($_POST);
        return header('Location: /?url=AssignmentController/assignmentPage');
    }
    public function updateAssignment($id)
    {
        //Xu ly hadlle
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Xử lý dữ liệu form
            $creatd_at = isset($_POST['creatd_at']) ? $_POST['creatd_at'] : '';
            $tasks_id = isset($_POST['tasks_id']) ? $_POST['tasks_id'] : '';
            $users_id = isset($_POST['users_id']) ? $_POST['users_id'] : '';
            $status = isset($_POST['status']) ? $_POST['status'] : '';

            $updateAssignment = new AssignmentModel();
            $data = [
                'creatd_at' => $creatd_at,
                'tasks_id' => $tasks_id,
                'users_id' => $users_id,
                'status' => $status,
            ];
            $result = $updateAssignment->updateAssignmentModel($id, $data);
            if ($result) {
                header('Location:/?url=AssignmentController/assignmentPage');
            }
        } else {
            echo 'Không có dữ liệu được gửi từ form.';
        }
    }
    public function updateHidden($id)
    {
        $updateHidden = new AssignmentModel();
        $data = [
            'hidden' => 0,
        ];
        $result = $updateHidden->updateAssignmentModel($id, $data);
        if ($result) {
            header('Location:/?url=AssignmentController/assignmentPage');
        } else {
            echo 'Không có dữ liệu được gửi từ form.';
        }
    }
    public function deleteAssignment()
    {
        $id = $_GET['id'];
        echo $id;
        $this->updateHidden($id);
    }
    public function detail($id)
    {
        $taskModel = new TaskModel;
        $getOne = $taskModel->getAllTask();
        $userModel = new UserModel;
        $user = $userModel->getAllUser();
        $detail = new AssignmentModel();
        $assignment = $detail->getOneAssignment($id);
        $data = [
            'tasks' => $getOne,
            'users' => $user,
            'assignment' => $assignment,
        ];
        $this->_renderBase->renderSidebar();
        $this->load->render('client/assignment_update', $data);
    }
}