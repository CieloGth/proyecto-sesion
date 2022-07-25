<?php
    // print_r($_REQUEST);
    // exit;     
    session_start();
     $message="";
     if(count($_POST)>0) {
         $con = mysqli_connect('localhost','root',null,'test',3310) or die('Unable To connect');
         $result = mysqli_query($con,"SELECT * FROM user WHERE usuario='" . $_POST["usuario"] . "' and password = '". md5($_POST["password"])."';");
         $row  = mysqli_fetch_array($result);
         if(is_array($row)) {
         $_SESSION["id"] = $row['id'];
         $_SESSION["usuario"] = $row['usuario'];
         $_SESSION["contraseña"] = $row['contraseña'];
         $_SESSION["password"] = $row['password'];
         $_SESSION['login']=true;
         } 
         else {
          $message = "Invalid Username or Password!";
         }
        //  $_SESSION['login']==true;
     }
     if(isset($_SESSION["usuario"])) {
        header("Location:index.php");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form name="form" method="post" action="">
        <div class="message"><?php if($message!="") { echo $message; }  ?></div>
        <h3 text-align="center">Enter Login Details</h3>
        <p>Usuario: </p>
        <br>
        <input type="text" id="usuario" name="usuario">
        <br>
        <p>Contraseña: </p>
        <input type="password" id="password" name="password">
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset">
    </form>
</body>
</html>