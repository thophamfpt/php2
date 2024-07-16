<?php

namespace controllers;

use models\ProductModel;

class ProductController
{

    public function getProduct()
    {
        $ProductModel = new ProductModel();
        return $ProductModel->getListProducts();
        require_once 'views/list.php';
    }

    public function addproduct(){
        require_once 'views/create.php';
    }
}
