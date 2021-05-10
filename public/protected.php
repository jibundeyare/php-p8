<?php

session_start();

// on vérifie si la variable de session contient l'email de l'utilisateur
// si ce n'est pas le cas, on renvoit l'utilisateur vers la page de login
// sinon on affiche la page normalement
if (!isset($_SESSION['email'])) {
    // la clé email n'existe pas

    // on renvoit l'utilisateur vers la page de login
    header("Location: login.php");
    // on stop l'exécution du programme pour être sûr qu'aucune donnée ne sera affiché
    exit();
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protected</title>
</head>
<body>
    <h1>Protected</h1>
    <div>
        <?= $_SESSION['email'] ?>
    </div>
</body>
</html>