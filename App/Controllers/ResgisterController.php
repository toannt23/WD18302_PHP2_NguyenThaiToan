<?php

namespace App\Controllers;

use App\Core\RenderBase;

use App\Models\UserModel;

class ResgisterController extends BaseController
{

    private $_renderBase;


    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->ResgisterController();
    }

    function ResgisterController()
    {
        $this->loadViewResgister();
    }

    public function loadViewResgister()
    {

        if (!empty($_SESSION['user'])) {
            //$this->redirect(ROOT_URL);
        }
        $this->load->render('layout/resgister');
    }


    public function handleResgister()
    {
        // validation form
        // kiểm tra trước rồi mới new UserModel();
        $userModel = new UserModel();

        if (empty($_POST["fullname"])) {
            $fullnameError = 'Họ và tên không bỏ trống';
            $_SESSION['fullname_error'] = $fullnameError;
            header('Location: /?url=ResgisterController');
        }
        if (empty($_POST["email"])) {
            $emailError = 'Email không bỏ trống';
            $_SESSION['email_error'] = $emailError;
            header('Location: /?url=ResgisterController');
        }

        if (empty($_POST["password"])) {
            $passwordError = 'Mật khẩu không bỏ trống';
            $_SESSION['password_error'] = $passwordError;
            header('Location: /?url=ResgisterController');
        }

        if (empty($_POST["phone"])) {
            $phoneError = 'Số điện thoại không bỏ trống';
            $_SESSION['phone_error'] = $phoneError;
            header('Location: /?url=ResgisterController');
        }

        //$_POST["password"] = $userModel->hasdedPassword($_POST["password"]);
        $checkuser = $userModel->checkMailExit($_POST["email"]);

        if ($checkuser) {
            // tài khoản này có rồi , vui lòng đăng nhập
            // chuyển trang tới /?url=LoginController/loadViewLogin
            // báo lỗi
            $emailErrorUser = 'Tài khoản đã có vui lòng đăng nhập.';
            $_SESSION['error_user'] = $emailErrorUser;

            header('Location: /?url=ResgisterController');
            exit();
        } else {
            $userModel->registerUser($_POST);
            header('Location: /?url=LoginController/loadViewLogin');
        }

    }


}