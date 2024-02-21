<?php

namespace App\Core;

use App\Controllers\BaseController;

class RenderBase extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderHeader()
    {
        $this->load->render('layout/header');
    }

    public function renderSidebar()
    {
        $this->load->render('layout/sidebar');
    }


}