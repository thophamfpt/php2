<?php

namespace models;
use common\Database;
class ProductModel 
{
   
    public function getListProducts()
    {
        $db = new Database();
        global $pdo;
        $sql = "SELECT * FROM products";
        $query = $db->pdo->query($sql);
        $sesult = $query->fetchAll();

        return $sesult;
    }
}