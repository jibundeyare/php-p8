<?php

use App\Model\User;

// include / require
require __DIR__.'/../vendor/autoload.php';

// liste des utilisateurs
$users = [];

// création d'un user
$users[1] = new User();
$users[1]->setEmail('foo@example.com');
$users[1]->setPassword('123');

// création d'un user
$users[2] = new User();
$users[2]->setEmail('bar@example.com');
$users[2]->setPassword('123');

// création d'un user
$users[3] = new User();
$users[3]->setEmail('baz@example.com');
$users[3]->setPassword('123');

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>
    <ul>
    <?php
    foreach ($users as $user):
        ?>
        <li><?= $user->getEmail() ?></li>
        <?php
    endforeach;
    ?>
    </ul>
</body>
</html>