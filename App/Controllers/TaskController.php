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
        $this->TaskController();
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

    public function insertTask()
    {
        $taskModel = new TaskModel();
        $taskModel->insertTaskModel($_POST);
        //header('Location: /?url=TaskController');
    }

    public function updateTask()
    {
        $taskModel = new TaskModel();
        $taskModel->updateTaskModel();
    }

    function detail($id)
    {        // dữ liệu ở đây lấy từ responsitories hoặc model

    }

}