<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
session_abort();
header("Location:login.php");
?>