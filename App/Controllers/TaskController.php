<?php

namespace App\Controllers;

use App\Core\RenderBase;

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
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderSidebar();
        $this->load->render('client/task');
    }

    function detail($id)
    {        // dữ liệu ở đây lấy từ responsitories hoặc model

    }

}