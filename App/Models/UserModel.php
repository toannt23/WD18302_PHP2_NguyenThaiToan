<?php

namespace App\Models;


class UserModel extends BaseModel
{

    protected $table = 'user';


    public function getAllUser()
    {
        return $this->getAll()->get();
    }

    public function checkUserExist($email)
    {
        return $this->getAllUser();
    }
}