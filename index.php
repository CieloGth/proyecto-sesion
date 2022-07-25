<?php
    session_start();
    if(empty($_SESSION['login'])|| $_SESSION['login']==false){
        header('Location: login.php');
    }
    // else{
    //     echo "bienvenido ";  
    // }
    else if(empty($_SESSION['login'])|| $_SESSION['login']==true){
        if(!empty($_SESSION['usuario'])) {
            var_dump($_SESSION['login']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    <h1>Bienvinido <?php echo $_SESSION["usuario"]; ?></h1>
    <br>
    <?php print_r($_SESSION)?>
    <br>
    <?php echo $_SESSION["contraseña"];?>
    <br>
    <?php $pass = md5($_SESSION["contraseña"]);?>
    <br>
    <?php echo $pass;?>
    <br>
    <?php echo $_SESSION["password"];?>

    <a href="./logout.php">Cerrar Session</a>
</body>
</html>
<?php }} ?>