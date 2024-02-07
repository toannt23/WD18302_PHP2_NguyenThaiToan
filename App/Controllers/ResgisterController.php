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


        if (empty($_POST["email"])) {
            $emailError = 'Email không bỏ trống';
            $_SESSION['email_error'] = $emailError;
            return header('Location: /?url=ResgisterController');
        }

        if (empty($_POST["password"])) {
            $passwordError = 'Mật khẩu không bỏ trống';
            $_SESSION['password_error'] = $passwordError;
            return header('Location: /?url=ResgisterController');
        }

        //$_POST["password"] = $userModel->hasdedPassword($_POST["password"]);
        $user = $userModel->checkUserExist($_POST["email"], $_POST["password"]);

        if ($user) {
            // tài khoản này có rồi , vui lòng đăng nhập
            // chuyển trang tới /?url=LoginController/loadViewLogin
            // báo lỗi
            $emailErrorUser = 'Tài khoản đã có vui lòng đăng nhập.';
            $_SESSION['email_user'] = $emailErrorUser;
            return header('Location: /?url=ResgisterController');
        } else {
            $userModel->registerUser($_POST);
            return header('Location: /?url=LoginController');
        }

        // $userModel->registerUser($_POST);

        // if ($userModel) {
        //     return header('Location: /?url=LoginController');
        // } else {
        //     var_dump('Đăng ký không thành công.');
        // }

    }


}