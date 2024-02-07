<?php

namespace App\Models;



class UserModel extends BaseModel
{
    protected $name = "UserModel";
    public $tableName = 'users';
    public $table = "users";

    public $id_user = "id";

    public function __construct()
    {
        parent::__construct();
    }
    public function getAllUser()
    {
        return $this->getAll()->get();
    }

    public function checkUserExist($email, $password)
    {
        return $this->select()->where('email', '=', $email)->where('password', '=', $password)->first();
    }

    public function hasdedPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function getAllWithPaginate(int $limit = 10, int $offset = 0)
    {
        // return $this->select()->where('email', '=', $email)->first();
    }

    public function registerUser($data)
    {
        // $tableName = $this->tableName;
        $user = $this->insertData($this->table, $data);
    }

    public function create($data)
    {
        var_dump($this->tableName);
    }
}