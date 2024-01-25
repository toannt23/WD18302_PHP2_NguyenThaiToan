<?php

namespace App\Controllers;

use App\Core\RenderBase;

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
        $this->AssignmentController();
    }

    function AssignmentController()
    {
        $this->assignmentPage();
    }

    function assignmentPage()
    {
        //$this->_renderBase->renderHeader();
        $this->_renderBase->renderSidebar();
        $this->load->render('client/assignment');
    }

    function detail($id)
    {        // dữ liệu ở đây lấy từ responsitories hoặc model

    }

}