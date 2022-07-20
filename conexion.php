<?php
    $host="127.0.0.1";
    $user="root";
    $pass="1234";
    $bd="test";
    $table="user";

    $enlace = mysqli_connect($host,$user,$pass,$bd);
    if(!$enlace){
        echo "Error: no se puedo conectar a MSQL" . PHP_EOL;
    }
?>