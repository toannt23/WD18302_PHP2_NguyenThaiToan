<?php

$hostname = "localhost";
$username = "root";
$password = "mysql";
$database = "wd18302_php2_nguyenthaitoan";

$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>