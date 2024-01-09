<?php

namespace Php2\Oop\Model;

class BaseModel
{
    public $Lab = "Lab2_NguyenThaiToan";
    public $mssv = "PC06149";
    public function get_information()
    {
        return $this->Lab . " - " . $this->mssv;
        ;
    }
}