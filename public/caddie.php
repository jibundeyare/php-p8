<?php

session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caddie</title>
</head>
<body>
    <ul>
    <?php
    // on parcourt tous les éléments du tableau des commandes
    foreach ($_SESSION['invoice'] as $key => $value):
        ?>
        <li><?= $key ?> : <?= $value ?></li>
        <?php
    endforeach;

    // on vérifie si le tableau des commandes contient des éléments
    // s'il n'en contient pas, on affiche que le tableau est vide
    if (count($_SESSION['invoice']) == 0):
        ?>
        <li>aucun produit</li>
        <?php
    endif
    ?>
    </ul>
    <div>
        <a href="invoice.php">continuer à passer commande</a>
    </div>
</body>
</html>