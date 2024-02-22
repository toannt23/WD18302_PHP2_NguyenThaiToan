<?php

namespace App\Controllers;

use App\Core\RenderBase;
use App\Models\UserModel;

class ResetPassController extends BaseController
{

    private $_renderBase;


    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
        //$this->ResgisterController();
    }

    function ResetPassController()
    {
        $this->loadViewReset();
    }

    public function loadViewReset()
    {
        $this->load->render('client/reset_password');
    }
    function handleResetPassword()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_SESSION["email"];
                $password = $_POST["password"];

                $userModel = new UserModel();
                $userModel->updatePass($email, $password);

                unset($_SESSION["reset_token"]);
                unset($_SESSION["email"]);


                header("Location: ?url=LoginController/loadViewLogin");
                exit();
            } else {
                $error = "Passwords do not match. Please try again.";
            }
        }

    }

}