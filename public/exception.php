<?php

use App\Lib;

require __DIR__.'/../vendor/autoload.php';

// appel de la fonction statique sum() avec des valeurs positives
$result1 = Lib::sum(123, 42);

try {
    // appel de la fonction statique sum() avec des valeurs négatives
    $result2 = Lib::sum(3.14, -2.71);
} catch (Exception $e) {
    // affichage des infirmations de l'exception
    echo $e->getMessage().'<br>';
    echo $e->getFile().'<br>';
    echo $e->getLine().'<br>';
    echo $e->getTraceAsString().'<br>';

    // les options possibles :
    // - stoper le programme
    // - rediriger l'utilisateur vers une page erreur 500
    // - continuer
} finally {
    // on initialise la variable $result2 à 0 si elle n'a pas été initialisée
    if (!isset($result2)) {
        // la variable n'a pas été initialisée
        $result2 = null;
    }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception</title>
</head>
<body>
    <h1>Exception</h1>
    <div>
        <?= $result1 ?>
    </div>
    <div>
        <?= $result2 ?>
    </div>
</body>
</html>