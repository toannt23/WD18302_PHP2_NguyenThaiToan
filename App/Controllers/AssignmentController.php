<?php

namespace App\Controllers;

use App\Core\RenderBase;
use App\Models\AssignmentModel;

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
        $assignmentModelView = new AssignmentModel();
        $AssignmentModel = $assignmentModelView->getAllAssignment();
        $this->_renderBase->renderSidebar();
        $this->load->render('client/assignment', $AssignmentModel);
    }

    function detail($id)
    {        // dữ liệu ở đây lấy từ responsitories hoặc model

    }

}