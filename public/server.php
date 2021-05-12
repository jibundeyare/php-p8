<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <h1>Server</h1>
    <ul>
    <?php
    // boucle foreach qui parcourt tos les éléments du tableau $_SERVER
    foreach ($_SERVER as $key => $value):
        ?>
        <li><?= $key ?> : <?= $value ?></li>
        <?php
    endforeach;
    ?>
    </ul>
</body>
</html>