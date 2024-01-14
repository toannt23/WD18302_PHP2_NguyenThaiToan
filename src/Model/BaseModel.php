<?php

namespace Php2\Oop\Model;


use Php2\Oop\Model\AbstractBase;
use Php2\Oop\Model\InterfaceBase;


class BaseModel extends AbstractBase implements InterfaceBase
{

    public function getModel()
    {

    }

    public function getAll()
    {
        echo ("Lấy hết danh sách nhân viên");
    }

    public function create()
    {
        echo ("Tạo mới nhân viên");
    }

    public function update()
    {
        echo ("Cập nhật danh sách nhân viên");
    }

    public function delete()
    {
        echo ("Xóa danh sách nhân viên");
    }

    public function getTable()
    {

    }
}