
<?php
    if(count($_POST)>0) {
        $ver=false;
        $contraseña="";
        function verificacion(){
            $is_int = filter_var($_POST["telefono"], FILTER_VALIDATE_INT);
            var_dump($is_int);
            $is_email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
            var_dump($is_email);
            if($_POST["cont"]==$_POST["cont2"]){
                echo"Igual";
            }
            else{
                echo"equivocado";
            }
            if($_POST["cont"]==$_POST["cont2"] && $is_int==true&&$is_email==true){
                echo"<br>Bien <br>";
                echo"Datos correctos para la conexion";
                global $ver;
                $ver=true;
                var_dump($ver);
                echo$_POST["telefono"];
            }
            else{
                echo"MAL";
                global $ver;
                var_dump($ver);
                echo$_POST["telefono"];
            }
        }
        verificacion();
        var_dump($ver);
        if($ver==true){
            $con = mysqli_connect('localhost','root',null,'test',3310) or die('Unable To connect');
            
            $insert = mysqli_query($con,"INSERT INTO usuarios ( `nombre`, `apellido`, `usuario`, `email`, `contraseña`, `nacimiento`, `telefono`) VALUES ('".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["usuario"]."','".$_POST["email"]."','".$_POST["cont"]."','".$_POST["fecha"]."','".$_POST["telefono"]."');");

            $consulta = mysqli_query($con,"SELECT * FROM usuarios;");
            echo$_POST["telefono"];

            if ($consulta->num_rows > 0) {
                while($row = $consulta->fetch_assoc()) {
                    echo "<br> id: ". $row["id"]. " - nombre: ". $row["nombre"]. " " . $row["apellido"]. " " . $row["telefono"]  . "<br>";
                }
            } else {
                echo "0 results";
            }
        }
        
        
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form name="form" method="post" action="" style="text-align: center;">
            <div class="row">
                <div class="col-6 p-5" style="text-align: justify;">
                    <p>Nombre: </p>
                    <input type="text" class="form-control form-control-lg mb-3" name="nombre">
                    <br>
                    <p>Apellido: </p>
                    <input type="text" class="form-control form-control-lg mb-3" name="apellido">
                    <br>
                    <p>Fecha de nacimiento: </p>
                    <input type="date" class="form-control form-control-lg mb-3" name="fecha">
                    <br>
                    <p>Telefono: </p>
                    <input type="tel" class="form-control form-control-lg mb-3" name="telefono">
                    <br>
                </div>
                <div class="col-6 p-5" style="text-align: justify;">
                    <p>Usuario: </p>
                    <input type="text" class="form-control form-control-lg mb-3" name="usuario">
                    <br>
                    <p>Email: </p>
                    <input type="email" class="form-control form-control-lg mb-3" name="email">
                    <br>
                    <p>Contraseña: </p>
                    <input type="text" class="form-control form-control-lg mb-3" name="cont">
                    <br>
                    <p>Confirmar contraseña: </p>
                    <input type="text" class="form-control form-control-lg mb-3" name="cont2">
                    <br>
                </div>
            </div>
            <input type="submit" name="submit" value="Submit" onclick="">
        </form>
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>