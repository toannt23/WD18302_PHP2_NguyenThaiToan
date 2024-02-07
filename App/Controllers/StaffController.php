<?php

namespace App\Controllers;

use App\Core\RenderBase;
use App\Models\UserModel;

class StaffController extends BaseController
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
        $this->StaffController();
    }

    function StaffController()
    {
        $this->staffPage();
    }

    function staffPage()
    {
        $staffModelUser = new UserModel();
        $StaffModel = $staffModelUser->getAllUser();
        //$this->_renderBase->renderHeader();
        $this->_renderBase->renderSidebar();
        $this->load->render('client/staff', $StaffModel);
    }

    public function handleTask()
    {

    }

    function detail($id)
    {        // dữ liệu ở đây lấy từ responsitories hoặc model

    }

}