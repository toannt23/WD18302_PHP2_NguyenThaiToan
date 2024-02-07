<?php

namespace App\Models;

class AssignmentModel extends BaseModel
{
    protected $name = "AssignmentModel";
    public $tableName = 'assignments';
    public $table = "assignments";

    public function __construct()
    {
        parent::__construct();
    }
    public function getAllAssignment()
    {
        return $this->getAll()->get();
    }

    public function getAllWithPaginate(int $limit = 10, int $offset = 0)
    {
        // return $this->select()->where('email', '=', $email)->first();
    }

    public function updateAssignmentModel($id, $data)
    {
        $condition = "id = $id";
        $assignment = $this->updateData($this->table, $data, $condition);
    }

    public function create($data)
    {
        var_dump($this->tableName);
    }
}