<?php

$dsn = "mysql:host=localhost;dbname=blogdb;charset=utf8";
$user = 'root';
$password = '';
try {
    $conn =  new PDO($dsn, $user, $password);
    echo 'connected successfully';
} catch (PDOException $e) {
    echo "Failed " . $e->getMessage();
}

