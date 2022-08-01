<?php
$con = mysqli_connect('localhost','root',null,'test',3310) or die('Unable To connect');
            
$consulta = mysqli_query($con,"SELECT * FROM usuarios;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b57319cb40.js" crossorigin="anonymous"></script>
    <style>
        .d{
            visibility: collapse;
            position: fixed;
        }
        .a {
            visibility: visible;
            position: inherit;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <p><a href="./alta.php" class="btn btn-lg btn-outline-success"><i class="fa-solid fa-circle-plus"></i> Crear nuevo</a></p>
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
                    <tr>
                        <th scope="row">000000</th>
                        <td scope="row">Prueba</td>
                        <td scope="row">pru</td>
                        <td scope="row">correo@prueba.com</td>
                        <td scope="row"><button type="button" class="btn btn-sm btn-outline-info"><i class="fa-solid fa-eye"></i> Ver</button></td>
                        <td scope="row"><button type="button" class="btn btn-sm btn-outline-warning"><i class="fa-solid fa-file-pen"></i> Editar</button></td>
                        <td scope="row"><a href="./baja.php" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash-can"></i> Eliminar</i></a></td>
                    </tr>
                    <?php if($consulta->num_rows > 0):
                        while($row = $consulta->fetch_assoc()) :
                            ?>
                            <tr>
                                <th scope="row"><?php echo $row["id"] ?></th>
                                <td scope="row"><?php echo $row["nombre"]. " " . $row["apellido"] ?></td>
                                <td scope="row"><?php echo $row["usuario"] ?></td>
                                <td scope="row"><?php echo $row["email"] ?></td>
                                <td scope="row"><button type="button" class="btn btn-sm btn-outline-info"><i class="fa-solid fa-eye"></i> Ver</button></td>
                                <td scope="row"><button type="button" class="btn btn-sm btn-outline-warning"><i class="fa-solid fa-file-pen"></i> Editar</button></td>
                                <td scope="row"><a href="./baja.php" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash-can"></i> Eliminar</i></a></td>
                            </tr>
                    <?php endwhile; endif; ?>
                </tbody>
                <tfoot>
                </tfoot>
        </table>
        <br>
        <hr>
        <h1>Modal</h1>
        <br>
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
                    <tr>
                        <th scope="row">000000</th>
                        <td scope="row">Prueba</td>
                        <td scope="row">pru</td>
                        <td scope="row">correo@prueba.com</td>
                        <td scope="row"><button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#mi-modal-2" ><i class="fa-solid fa-eye"></i> Ver</button></td>
                        <!-- pantalla negra -->
                        <div
                            class="modal fade"
                            id="mi-modal-2"
                            tabindex="-1"
                            aria-hidden="true"
                            aria-labelledby="label-modal-2"
                        >
                            <!-- caja dialogo -->
                            <div class="modal-dialog modal-dialog-centered">
                                <!-- caja contenido -->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Prueba</h5>
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Id:000000</p>
                                        <p>Nombre: Pruebin</p>
                                        <p>Apellido: La Prueba</p>
                                        <p>Fecha de Nacimiento: 0000-00-00</p>
                                        <p>Usuario: pru</p>
                                        <p>Email: correo@prueba.com</p>
                                        <p>Telefono: 2222222222</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Acepto</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <td scope="row"><button type="button" class="btn btn-sm btn-outline-warning"><i class="fa-solid fa-file-pen"></i> Editar</button></td>
                        <td scope="row"><a href="./baja.php" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash-can"></i> Eliminar</i></a></td>
                    </tr>
                </tbody>
                <tfoot>
                </tfoot>
        </table>
        <br>
        <hr>
        <br>
        <h1>lados</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col" class="d">Apellido</th>
                    <th scope="col" class="d">Fecha de Nacimiento</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Email</th>
                    <th scope="col" class="d">Telefono</th>
                    <th scope="col" colspan="3">Accion</th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <th scope="row">000000</th>
                        <td scope="row">Prueba</td>
                        <td scope="row" class="d">Pruebin la prueba</td>
                        <td scope="row" class="d">0000-00-00</td>
                        <td scope="row">pru</td>
                        <td scope="row">correo@prueba.com</td>
                        <td scope="row" class="d">2222222222</td>
                        <td scope="row"><button type="button" class="btn btn-sm btn-outline-info"><i class="fa-solid fa-eye"></i> Ver</button></td>
                        <td scope="row"><button type="button" class="btn btn-sm btn-outline-warning"><i class="fa-solid fa-file-pen"></i> Editar</button></td>
                        <td scope="row"><a href="./baja.php" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash-can"></i> Eliminar</i></a></td>
                    </tr>
                </tbody>
                <tfoot>
                </tfoot>
        </table>
        <br>
        <hr>
        <br>
        <h1>Abajo</h1>
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
                    <tr>
                        <th scope="row">000000</th>
                        <td scope="row">Prueba</td>
                        <td scope="row">pru</td>
                        <td scope="row">correo@prueba.com</td>
                        <td scope="row"><button type="button" class="btn btn-sm btn-outline-info"><i class="fa-solid fa-eye"></i> Ver</button></td>
                        <td scope="row"><button type="button" class="btn btn-sm btn-outline-warning"><i class="fa-solid fa-file-pen"></i> Editar</button></td>
                        <td scope="row"><a href="./baja.php" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash-can"></i> Eliminar</i></a></td>
                    </tr>
                </tbody>
                <tfoot>
                </tfoot>
        </table>
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>