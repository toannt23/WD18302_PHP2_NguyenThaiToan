<?php

namespace App\Models;

use PDO;
use PDOException;
use mysqli;

class Database
{
    private static $dbHost = 'localhost';
    private static $dbName = 'wd18302_php2_nguyenthaitoan';
    private static $dbUser = 'root';
    private static $dbPassword = 'mysql';
    private static $dbPort = '3306';

    public function PdO()
    {
        try {
            $conn = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPassword);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            //self::$connection = $conn;
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function mysQli()
    {
        // Create connection
        $conn = new mysqli(self::$dbHost, self::$dbUser, self::$dbPassword, self::$dbName);

        // Check connection
        if ($conn->connect_errno) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}