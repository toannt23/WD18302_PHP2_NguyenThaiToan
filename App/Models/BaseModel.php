<?php

namespace App\Models;

use App\Models\CrudInterface;
use App\Models\Database;
use PDO;

abstract class BaseModel implements CrudInterface
{


    protected $table;


    private $_connection;
    private $_query;
    public function __construct()
    {
        $this->_connection = new Database();
    }

    public function getAll()
    {
        $this->_query = "SELECT * FROM $this->table ";

        return $this;
    }

    public function orderBy(string $order = 'ASC')
    {
        $this->_query = $this->_query . "order by " . $order;

        return $this;
    }

    public function get()
    {
        $stmt = $this->_connection->PdO()->prepare($this->_query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function limit(int $limit = 10)
    {
        $stmt = $this->_connection->PdO()->prepare($this->_query);
        $result = $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getOne(int $id)
    {
        $stmt = $this->_connection->PdO()->prepare($this->_query . "WHERE id " . $id);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function create(array $data)
    {
    }
    public function update(int $id, array $data)
    {
    }
    public function remove(int $id): bool
    {
        return true;
    }
}