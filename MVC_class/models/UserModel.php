<?php

namespace models;
use common\Database;
class UserModel
{
    public function getListUser()
    {
       $db = new Database;
       global $pdo;
       $sql = 'SELECT * FROM `users`';
       $query = $db->pdo->query($sql);
       $result = $query->fetchAll();
       return $result;

    }
}