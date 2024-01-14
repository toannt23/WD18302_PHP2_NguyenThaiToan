<?php

namespace Php2\Oop\Model;

// chi co phuong thuc khong co thuoc tinh 
interface InterfaceBase
{
    // Lay tat ca bang ghi 
    public function getAll();
    public function create();
    public function update();
    public function delete();
}