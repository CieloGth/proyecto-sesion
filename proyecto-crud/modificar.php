<?php
            $id=12;
            $con = mysqli_connect('localhost','root',null,'test',3310) or die('Unable To connect');

            $consulta = mysqli_query($con,"SELECT * FROM usuarios WHERE id ='$id';");

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
                    }
                    else{
                        echo"MAL";
                    }
                }
                verificacion();
                var_dump($ver);
                if($ver==true){
                    global $id;
                    mysqli_query($con,"UPDATE usuarios SET nombre='".$_POST["nombre"]."', apellido='".$_POST["apellido"]."', usuario='".$_POST["usuario"]."', email='".$_POST["email"]."', contraseña='".$_POST["cont"]."', nacimiento='".$_POST["fecha"]."', telefono='".$_POST["telefono"]."' WHERE id='".$id."';");
                    header('Location:index.php');
                }
            }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form name="form" method="post" action="" style="text-align: center;">
            <div class="row">
                <?php 
                    if ($consulta->num_rows > 0) :
                    while($row = $consulta->fetch_assoc()) :
                ?>
                <div class="col-6 p-5" style="text-align: justify;">
                    <p>Nombre: </p>
                    <input type="text" class="form-control form-control-lg mb-3" name="nombre" value="<?php echo $row["nombre"]?>">
                    <br>
                    <p>Apellido: </p>
                    <input type="text" class="form-control form-control-lg mb-3" name="apellido" value="<?php echo $row["apellido"]?>">
                    <br>
                    <p>Fecha de nacimiento: </p>
                    <input type="date" class="form-control form-control-lg mb-3" name="fecha" value="<?php echo $row["nacimiento"]?>">
                    <br>
                    <p>Telefono: </p>
                    <input type="tel" class="form-control form-control-lg mb-3" name="telefono" value="<?php echo $row["telefono"]?>">
                    <br>
                </div>
                <div class="col-6 p-5" style="text-align: justify;">
                    <p>Usuario: </p>
                    <input type="text" class="form-control form-control-lg mb-3" name="usuario" value="<?php echo $row["usuario"]?>">
                    <br>
                    <p>Email: </p>
                    <input type="email" class="form-control form-control-lg mb-3" name="email" value="<?php echo $row["email"]?>">
                    <br>
                    <p>Contraseña: </p>
                    <input type="text" class="form-control form-control-lg mb-3" name="cont" value="<?php echo $row["contraseña"]?>">
                    <br>
                    <p>Confirmar contraseña: </p>
                    <input type="text" class="form-control form-control-lg mb-3" name="cont2" value="<?php echo $row["contraseña"]?>">
                    <br>
                </div>
                <?php 
                    endwhile;
                    else:
                        echo "0 results";
                    endif;

                ?>
            </div>
            <input type="submit" name="submit" value="Submit" onclick="">
        </form>
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>