<?php

namespace Php2\Oop\Controller;

class BaseController
{
    public $title = "Lập trình hướng đối tượng";
    public function get_title()
    {
        return $this->title;
    }
}