<?php

namespace common;
use PDO;
use PDOException;
class Database
{
    public $pdo;
    public function __construct()
    {
        $host = 'localhost';
        $dbname  = 'php2';
        $user = 'root';
        $password = '';
        $port = '3306';
        $dsn = "mysql:host=$host;dbname=$dbname;port=$port;charset=utf8";
        try {
            
            $this->pdo = new PDO($dsn, $user, $password);
            if ($this->pdo) {
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                // echo 'Connection successfully';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
