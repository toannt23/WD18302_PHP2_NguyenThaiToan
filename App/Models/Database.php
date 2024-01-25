<?php

namespace App\Models;

use PDO;
use PDOException;

class Database
{
    private static $dbHost = 'localhost';
    private static $dbName = 'PHP2_Lab5';
    private static $dbUser = 'root';
    private static $dbPassword = 'mysql';
    private static $dbPort = '3306';

    public $connection;

    public function __construct()
    {
        self::PdO();
        var_dump($this->connection);
    }

    public static function PdO()
    {
        try {
            $conn = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPassword);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            self::$connection = $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public static function mysQli()
    {

    }
}