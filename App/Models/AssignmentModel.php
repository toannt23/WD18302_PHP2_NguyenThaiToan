<?php

namespace App\Models;

class AssignmentModel extends BaseModel
{
    protected $name = 'AssignmentModel';
    public $tableName = 'assignments';
    public $table = 'assignments';

    public function __construct()
    {
        parent::__construct();
    }
    public function getAllAssignment()
    {
        return $this->getAllHidden()->get();
    }
    public function getAllHiddenModel()
    {
        return $this->getAllHidden()->get();
    }
    public function getAllWithPaginate(int $limit = 10, int $offset = 0)
    {
        // return $this->select()->where('email', '=', $email)->first();
    }
    public function getOneAssignment($id)
    {
        return $this->getOne($id);
    }
    public function insertAssignmentModel($data)
    {
        $assignment = $this->insertData($this->table, $data);
    }
    public function updateAssignmentModel($id, $data)
    {
        return $this->update($id, $data);
    }
    public function create($data)
    {
        var_dump($this->tableName);
    }
}