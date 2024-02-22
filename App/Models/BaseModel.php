<?php

namespace App\Models;

use App\Models\CrudInterface;
use App\Models\Database;
use PDO;
use Exception;
use App\Models\QueryBuilder;

abstract class BaseModel implements CrudInterface
{
    use QueryBuilder;


    private $_connection;

    protected $name = "BaseModel";
    private $_query;

    protected $table;

    public function __construct()
    {
        $this->_connection = new Database();
    }

    abstract public function getAllWithPaginate(int $limit, int $offset);

    public function getAll()
    {
        $this->_query = "SELECT * FROM $this->tableName";

        return $this;
    }
    public function getAllHidden()
    {
        $this->_query = "SELECT * FROM $this->tableName WHERE hidden = 1";

        return $this;
    }

    public function getName()
    {
        $this->_query = "SELECT name FROM $this->tableName";
        return $this;
    }

    public function getFullName()
    {
        $this->_query = "SELECT fullname FROM $this->tableName";
        return $this;
    }
    public function checkMail($email)
    {
        $this->_query = "SELECT * FROM $this->tableName WHERE email = $email";
        return $this;
    }
    public function getID()
    {
        $this->_query = "SELECT id FROM $this->tableName";
        return $this;
    }

    public function orderBy(string $order = 'ASC')
    {
        $this->_query = $this->_query . "order by " . $order;

        return $this;
    }


    public function get()
    {
        $stmt = $this->_connection->PDO()->prepare($this->_query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getOne(int $id)
    {
        $this->_query = "SELECT * FROM $this->table WHERE id=$id";

        $stmt = $this->_connection->PdO()->prepare($this->_query);


        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function limit(int $limit = 10)
    {
        $stmt = $this->_connection->PDO()->prepare($this->_query);
        $result = $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function remove(int $id): bool
    {
        return true;
    }



    public function insertData($table, $data)
    {
        if (!empty($data)) {
            $fielStr = '';
            $valueStr = '';
            foreach ($data as $key => $value) {
                $fielStr .= $key . ',';
                $valueStr .= "'" . $value . "',";
            }

            $fielStr = rtrim($fielStr, ',');
            $valueStr = rtrim($valueStr, ',');
            $sql = "INSERT INTO  $table($fielStr) VALUES ($valueStr)";

            $status = $this->query($sql);
            if (!$status)
                return false;
        }
        return true;
    }

    public function updateData($table, $data, $condition = '')
    {
        if (!empty($data)) {
            $updateStr = '';
            foreach ($data as $key => $value) {
                if ($value === '' || $value === null) {
                    $updateStr .= "$key=NULL,";
                } else {
                    $updateStr .= "$key='$value',";
                }
            }
            $updateStr = rtrim($updateStr, ',');
            $sql = "UPDATE $table SET $updateStr";
            if (!empty($condition)) {
                $sql = "UPDATE $table SET $updateStr WHERE $condition";
            }
            $status = $this->query($sql);
            if (!$status)
                return false;
        }
        return true;
    }

    public function update(int $id, array $data)
    {
        $this->_query = "UPDATE $this->table SET ";
        foreach ($data as $key => $value) {
            $this->_query .= "$key = '$value', ";
        }
        $this->_query = rtrim($this->_query, ", ");

        $this->_query .= " WHERE id=$id";
        $stmt = $this->_connection->PdO()->prepare($this->_query);
        return $stmt->execute();
    }

    public function delete(int $id): bool
    {
        $this->_query = "DELETE FROM $this->table WHERE id=$id";

        $stmt = $this->_connection->PdO()->prepare($this->_query);
        $stmt->execute();
        $affected_rows = $stmt->rowCount();
        return $affected_rows;
    }

    public function query($sql)
    {
        try {
            $statement = $this->_connection->PDO()->prepare($sql);
            $statement->execute();
            return $statement;
        } catch (Exception $ex) {
            $mess = $ex->getMessage();
            echo $mess;
            die();
        }
    }
}