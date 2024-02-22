<?php

namespace App\Controllers;

use App\Core\RenderBase;

class CodePassController extends BaseController
{

    private $_renderBase;


    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
        //$this->ResgisterController();
    }

    function CodePassController()
    {
        $this->loadViewCode();
    }

    public function loadViewCode()
    {

        $this->load->render('client/code_password');
    }
    public function verifyCode()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["token"])) {
            $token = $_POST["token"];

            var_dump($_POST["token"]);
            if ($_SESSION["reset_token"] === (int) $token) {
                header("Location: ?url=ResetPassController/loadViewReset");
                exit();
            } else {

                echo "Mã không hợp lệ.";
            }
        } else {

            echo "Mã không xác định.";
        }
    }

}