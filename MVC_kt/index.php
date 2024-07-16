<?php

 require_once 'common/Database.php';
 require_once 'common/env.php';
 require_once 'controllers/ProductController.php';
 require_once 'models/ProductModel.php';

 use controllers\ProductController;

 $productController = new ProductController();

 $listProduct = $productController->getProduct();
 require_once 'views/list.php';


$act = (!empty($_GET['act']) ? $_GET['act'] : '/');

switch ($act) {
    case 'addproduct':
        (new ProductController())->addproduct();
        break;
}
