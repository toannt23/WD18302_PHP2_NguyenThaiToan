<?php

namespace App\Controllers;

use App\Core\RenderBase;

use App\Models\UserModel;

class LoginController extends BaseController
{

    private $_renderBase;


    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->LoginController();
    }

    function LoginController()
    {
        $this->loadViewLogin();
    }

    public function loadViewLogin()
    {

        if (!empty($_SESSION['user'])) {
            //$this->redirect(ROOT_URL);
        }
        $this->load->render('layout/login');
    }


    public function handleLogin()
    {
        // validation form
        // kiểm tra trước rồi mới new UserModel();
        $userModel = new UserModel();

        if (empty($_POST["email"])) {
            $emailError = 'Email không bỏ trống';
            $_SESSION['email_error'] = $emailError;
            return header('Location: /?url=LoginController');
        }

        if (empty($_POST["password"])) {
            $passwordError = 'Mật khẩu không bỏ trống';
            $_SESSION['password_error'] = $passwordError;
            return header('Location: /?url=LoginController');
        }

        $user = $userModel->checkUserExist($_POST["email"], $_POST["password"]);

        if (!$user) {
            // chuyển trang tới /?url=LoginController/loadViewLogin
            // báo lỗi
            $emailLoginUser = 'Tài khoản không tồn tại';
            $_SESSION['email_login'] = $emailLoginUser;
            return header('Location: /?url=LoginController');
        } else {
            $_SESSION['user'] = $user;
            return header('Location: /?url=HomeController/homePage');
        }
        //var_dump($user);
        //var_dump($_SESSION['user']);
        //var_dump($_POST["email"]);
    }



    public function logout()
    {
        unset($_SESSION['user']);
    }


}