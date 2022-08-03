<?php

            $con = mysqli_connect('localhost','root',null,'test',3310) or die('Unable To connect');

            $consulta = mysqli_query($con,"SELECT * FROM usuarios WHERE id ='11';");

    
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