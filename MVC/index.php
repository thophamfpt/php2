<?php
require_once './common/env.php';
require_once './common/connect.php';
require_once './models/UserModel.php';
require_once './controllers/UserController.php';


$act = (!empty($_GET['act']) ? $_GET['act'] : '/');

switch ($act) {
    case '/':
        showUser();
        break;
    case 'detailUser':
        $user_id = (!empty($_GET['userid']) ? $_GET['userid'] : '');
        detailUser($user_id);
        break;
    case 'addUser':
        addUser();
        if (isset($_POST['them'])) {
            addPostUser(
                $_POST['name'],
                $_POST['age'],
                $_POST['address']
            );
        }
        break;
    default:
        # code...
        break;
}
