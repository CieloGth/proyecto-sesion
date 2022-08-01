<?php

$con = mysqli_connect('localhost','root',null,'test',3310) or die('Unable To connect');
$consulta = mysqli_query($con,"SELECT * FROM usuarios;");
    function baja($idn){
        global $con;
        $baja = mysqli_query($con,"DELETE FROM usuarios WHERE id = '".$_POST[$idn]."';");
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b57319cb40.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container mt-5">
        <p><a href="./alta.php" class="btn btn-lg btn-outline-success"><i class="fa-solid fa-circle-plus"></i> Crear nuevo</a></p>
        <form name="form" method="post" action="" style="text-align: center;">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Email</th>
                    <th scope="col" colspan="3">Accion</th>
                </tr>
            </thead>
            <tbody>
                
                <?php if($consulta->num_rows > 0):
                    while($row = $consulta->fetch_assoc()) :
                        ?>
                        <tr>
                            
                            <th name="<?php echo $row["id"]?>" scope="row"><?php echo $row["id"];?></th>
                            <td scope="row"><?php echo $row["nombre"]. " " . $row["apellido"] ?></td>
                            <td scope="row"><?php echo $row["usuario"] ?></td>
                            <td scope="row"><?php echo $row["email"] ?></td>
                            <td scope="row"><button type="button" class="btn btn-sm btn-outline-info"><i class="fa-solid fa-eye"></i> Ver</button></td>
                            <td scope="row"><button type="button" class="btn btn-sm btn-outline-warning"><i class="fa-solid fa-file-pen"></i> Editar</button></td>
                            <td scope="row"><button type="button" class="btn btn-sm btn-outline-danger" onclick="<?php baja($row['id'])?>"><i class="fa-solid fa-trash-can"></i> Eliminar</i></button></td>
                        </tr>
                <?php endwhile; endif; ?>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
        </form>

    <script src="../js/bootstrap.min.js"></script>

</body>
</html>