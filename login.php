<?php
    session_start();

    if()
    $_SESSION['login_id']=true;
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
        <input type="text" name="user">
        <br>
        <p>Contraseña: </p>
        <input type="password" name="password">
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset">
    </form>
</body>
</html>