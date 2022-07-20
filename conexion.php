<?php
    $host="";
    $user="";
    $pass="";
    $bd="";
    $table="";

    $enlace = mysqli_connect($host,$user,$pass,$bd);
    if(!$enlace){
        echo "Error: no se puedo conectar a MSQL" . PHP_EOL;
    }
?>