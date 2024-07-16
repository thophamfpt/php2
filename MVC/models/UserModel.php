<?php


function getAllUser()
{
    global $pdo;
    $sql = 'SELECT * FROM `users`';
    $query = $pdo->query($sql);

    $result = $query->fetchAll();

    return $result;
}

function getUser($user_id)
{
    global $pdo;

    $sql = "SELECT * FROM `users` WHERE  id = '$user_id'";
    $query = $pdo->query($sql);

    $result = $query->fetch();

    return $result;
}

function addUserModel($name, $age, $address)
{
    global $pdo;
    $sql = "INSERT INTO `users`(`name`, `age`, `address`) 
    VALUES ('$name','$age','$address ')";

    $pdo->query($sql);
}
