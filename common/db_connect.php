<?php

$host = 'localhost';
$name = 'root';
$pass = '';
$db_name = 'quora';

$conn = new mysqli($host, $name, $pass, $db_name);

if($conn->connect_error){
    echo "ERROR: $conn->error";
}