<?php

$host = 'localhost';
$dbname  = 'php2';
$user = 'root';
$password = '';
$port = '3306';
$dsn = "mysql:host=$host;dbname=$dbname;port=$port;charset=utf8";
try {
    $pdo = new PDO($dsn, $user, $password);
    if ($pdo) {
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        // echo 'Connection successfully';
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
