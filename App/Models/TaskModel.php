<?php

namespace App\Models;

class TaskModel extends BaseModel
{
    protected $name = "TaskModel";
    public $tableName = 'tasks';
    public $table = "tasks";

    public function __construct()
    {
        parent::__construct();
    }
    public function getAllTask()
    {
        return $this->getAllHidden()->get();
    }

    public function checkUserExist($email)
    {
        return $this->select()->where('email', '=', $email)->first();
    }
    public function getAllWithPaginate(int $limit = 10, int $offset = 0)
    {
        // return $this->select()->where('email', '=', $email)->first();
    }
    public function getNameTask()
    {
        return $this->getName()->get();
    }
    public function getOneTask($id)
    {
        return $this->getOne($id);
    }

    public function insertTaskModel($data)
    {
        // $tableName = $this->tableName;
        $task = $this->insertData($this->table, $data);
    }

    public function updateTaskModel($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteTaskModel($id)
    {
        return $this->delete($id);
    }

    public function create($data)
    {
        var_dump($this->tableName);
    }
}