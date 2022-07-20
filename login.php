<?php
     session_start();
     $message="";
     if(count($_POST)>0) {
         $con = mysqli_connect('127.0.0.1','root','','test') or die('Unable To connect');
         $result = mysqli_query($con,"SELECT * FROM user WHERE nombre='".$_POST["usuario"]."' AND password='".$_POST["pasword"]."';");
         $row  = mysqli_fetch_array($result);
         if(is_array($row)) {
         $_SESSION["id"] = $row['id'];
         $_SESSION["name"] = $row['name'];
         } else {
          $message = "Invalid Username or Password!";
         }
     }
     if(isset($_SESSION["id"])) {
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
        <h3 align="center">Enter Login Details</h3>
        <p>Usuario: </p>
        <br>
        <input type="text" name="usuario">
        <br>
        <p>Contraseña: </p>
        <input type="password" name="password">
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset">
    </form>
</body>
</html>