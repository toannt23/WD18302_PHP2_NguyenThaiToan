<?php

namespace App\Models;



class UserModel extends BaseModel
{
    protected $name = "UserModel";
    public $tableName = 'users';
    public $table = "users";

    public function __construct()
    {
        parent::__construct();
    }
    public function getAllUser()
    {
        return $this->getAll()->get();
    }
    public function getNameUser()
    {
        return $this->getFullName()->get();
    }
    public function checkMailExit($email)
    {
        return $this->select()->where('email', '=', $email)->first();
    }

    public function updatePass($email, $password)
    {
        $pass = $this->select()->where('email', '=', $email)->first();
        if ($pass) {
            $id = $pass['id'];
            $this->update($id, ['password' => $password]);
        }

    }
    public function checkUserExist($email, $password)
    {
        return $this->select()->where('email', '=', $email)->where('password', '=', $password)->first();
    }
    public function checkForgot($email)
    {
        return $this->checkMail($email);
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