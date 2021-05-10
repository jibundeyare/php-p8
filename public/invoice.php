<?php

session_start();

// on vérifie si la clé invoice existe
if (!isset($_SESSION['invoice'])) {
    // la clé n'existe pas, on associe un tableau vide à la clé
    $_SESSION['invoice'] = [];
}

// on vérifie si l'utilisateur a envoyé des données
if ($_POST) {
    // l'utilisateur a envoyé des données

    // on récupère les données envoyées par l'utilisateur
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];

    // on vérifie si la clé $product existe
    // si elle n'existe pas, on associe la quantité au produit
    // si elle existe, on ajoute à la quantité déjà associée au produit
    if (!isset($_SESSION['invoice'][$product])) {
        $_SESSION['invoice'][$product] = $quantity;
    } else {
        $_SESSION['invoice'][$product] += $quantity;
    }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <input type="text" name="product" id="">
        </div>
        <div>
            <input type="number" name="quantity" id="">
        </div>
        <div>
            <button type="submit">commander</button>
        </div>
    </form>
    <div>
        <a href="caddie.php">passer à la caisse</a>
    </div>
</body>
</html>