<?php

namespace App\Controllers;

use App\Core\RenderBase;

class LoginController extends BaseController
{

    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }

    public function loadViewLogin()
    {
        $this->load->render('client/login');
    }

    public function handleLogin()
    {
        var_dump($_POST["email"]);
        //validation from
    }

}