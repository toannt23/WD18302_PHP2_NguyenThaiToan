<?php

namespace App\Controllers;

use App\Core\RenderBase;

use App\Models\TaskModel;

class TaskController extends BaseController
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
        //$this->TaskController();
    }

    function TaskController()
    {
        $this->taskPage();
    }

    function taskPage()
    {
        $taskModel = new TaskModel;
        $taskModelPage = $taskModel->getAllTask();
        //$this->_renderBase->renderHeader();
        $this->_renderBase->renderSidebar();
        $this->load->render('client/task', $taskModelPage);
    }
    function taskAdd()
    {
        $this->_renderBase->renderSidebar();
        $this->load->render('client/task_add');
    }
    public function handleInsertTask()
    {
        $taskModel = new TaskModel();
        //validate form
        if (empty($_POST["name"])) {
            $nameError = "Tên không được bỏ trống";
            $_SESSION['name_error'] = $nameError;
            return header('Location: /?url=TaskController/taskAdd');
        }
        if (empty($_POST["dealine"])) {
            $dealineError = "Thời hạn được bỏ trống";
            $_SESSION['dealine_error'] = $dealineError;
            return header('Location: /?url=TaskController/taskAdd');
        }
        if (empty($_POST["description"])) {
            $descriptionError = "Chi tiết được bỏ trống";
            $_SESSION['description_error'] = $descriptionError;
            return header('Location: /?url=TaskController/taskAdd');
        }
        $taskModel->insertTaskModel($_POST);
        return header('Location: /?url=TaskController/taskPage');
    }

    public function updateTask($id)
    {
        if (empty($_POST["name"])) {
            $nameError = "Tên không được bỏ trống";
            $_SESSION['name_error'] = $nameError;
            return header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        if (empty($_POST["dealine"])) {
            $dealineError = "Thời hạn chưa được thiết lập";
            $_SESSION['dealine_error'] = $dealineError;
            return header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        if (empty($_POST["description"])) {
            $descriptionError = "Chi tiết được bỏ trống";
            $_SESSION['description_error'] = $descriptionError;
            return header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Xử lý dữ liệu form
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $dealine = isset($_POST['dealine']) ? $_POST['dealine'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $status = isset($_POST['status']) ? $_POST['status'] : '';

            $updateTask = new TaskModel();
            $data = [
                'name' => $name,
                'dealine' => $dealine,
                'description' => $description,
                'status' => $status,
            ];
            $result = $updateTask->updateTaskModel($id, $data);
            if ($result) {
                header('Location:/?url=TaskController/taskPage');
            }
        } else {
            echo 'Không có dữ liệu được gửi từ form.';
        }
    }
    public function updateHidden($id)
    {
        $updateHidden = new TaskModel();
        $data = [
            'hidden' => 0,
        ];
        $result = $updateHidden->updateTaskModel($id, $data);
        if ($result) {
            header('Location:/?url=TaskController/taskPage');
        } else {
            echo 'Không có dữ liệu được gửi từ form.';
        }
    }
    public function deleteTask()
    {
        $id = $_GET['id'];
        echo $id;
        $this->updateHidden($id);
    }

    function detail($id)
    {
        $detail = new TaskModel();
        $data = $detail->getOneTask($id);
        $this->_renderBase->renderSidebar();
        $this->load->render('client/task_update', $data);
    }

}