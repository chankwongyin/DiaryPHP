<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "diaryDB";

// Create connection
global $connect;
$connect = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
echo "Database Connected successfully<br>";