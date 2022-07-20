<?php
    if(empty($_SESSION['login'])|| $_SESSION['login']==false){
        header('Location: login.php');
    }
    else{
        echo "bienvenido";
    }
?>
