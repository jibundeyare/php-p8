<?php

session_start();

// on vérifie que l'utilisateur a envoyé des données
if ($_POST) {
    // l'utilisateur a envoyé des données

    // on récupère le mail et le mot de passe
    $email = $_POST['email'];
    $password = $_POST['password'];

    // on vérifie si l'email et le mot de passe sont corrects
    // s'ils sont sont corrects :
    // - on ajoute l'email à la variable de session
    // - on redirige l'utilisateur vers la page protégée
    if ($email == 'foo@example.com' && $password == '123') {
        // l'email et le mot de passe sont corrects

        // on affecte l'email à la clé email de la variable de session
        $_SESSION['email'] = $email;

        // on renvoit l'utilisateur vers la page protégée
        header("Location: protected.php");
        // on stop l'exécution du programme pour être sûr qu'aucune donnée ne sera affiché
        exit();
    }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <input type="text" name="email" id="">
        </div>
        <div>
            <input type="password" name="password" id="">
        </div>
        <div>
            <button type="submit">ok</button>
        </div>
    </form>
</body>
</html>