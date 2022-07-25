<?php
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["usuario"]);
    unset($_SESSION["contraseña"]);
    unset($_SESSION["password"]);
    // unset($_SESSION["login"]);
    $_SESSION['login']=false;
    session_abort();

    setcookie('PHPSESSID', '', time()-14400,);
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Adios
    <?php #var_dump($_SESSION['login']); ?>
    <?php #print_r($_SESSION); ?>
    <a href="./login.php">Bye</a>
</body>
</html> -->
<?php

header("Location:login.php");
?>