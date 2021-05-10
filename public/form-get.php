<?php

// $_GET est une variable super-globale

// url: http://localhost:8000/form-get.php?email=foo%40example.com&password=123
// les paramètres GET: ?email=foo%40example.com&password=123
// - email: foo%40example.com
// - password: 123

// urlencode('foo@example.com'): foo%40example.com
// urldecode('foo%40example.com'): foo@example.com

if ($_GET) {
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';

    echo $_GET['email'];
    echo '<br>';
    echo $_GET['password'];
    echo '<br>';
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form get</title>
</head>
<body>
    <form action="" method="get">
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