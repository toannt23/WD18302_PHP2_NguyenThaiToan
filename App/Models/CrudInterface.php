<?php

namespace App\Models;

interface CrudInterface
{
    //interface bang thiet ke cho phuong thuc
    /**
     * Phương thức getAll() dùng để lấy tất cả records
     */
    public function getAll();

    public function getOne($id);

    public function create(array $data);

    public function updata(int $id, array $data);

    public function delete($id, array $data);
}