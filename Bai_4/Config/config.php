<?php

$hostname = "localhost";
$username = "root";
$password = "mysql";
$database = "php2_liststaff";

$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>