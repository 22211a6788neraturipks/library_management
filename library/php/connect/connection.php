<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "book_quest";

$connect = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName, 3307);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
echo "";
?>