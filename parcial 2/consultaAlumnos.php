<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php include 'conexion.php';
    include 'menu.php';
    $sql = "SELECT * FROM alumnos";
    $datos = $conexion->query($sql); ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if($datos->num_rows > 0){ ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Número de control</th>
                                <th>Semestre</th>
                                <th>Edad</th>
                                <th>Turno</th>
                                <th>Sexo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            while($registro = $datos->fetch_assoc()){ ?>
                            <tr>
                                <td><?php echo $registro["id"]; ?></td>
                                <td><?php echo $registro["nombre"]; ?></td>
                                <td><?php echo $registro["numero_control"]; ?></td>
                                <td><?php echo $registro["semestre"]; ?></td>
                                <td><?php echo $registro["edad"]; ?></td>
                                <td><?php echo $registro["turno"]; ?></td>
                                <td><?php echo $registro["sexo"]; ?></td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                                </td>
                            </tr>
                          <?php  } ?>
                        </tbody>
                    </table>
               <?php } else { ?>
                <h2>No existen datos de alumnos en la base de datos</h2>
               <?php } ?>
            </div>
        </div>
    </div>

<footer class="text-center"><hr>
<span>Cetis 107 web app &copy; 2023</span>
</footer>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>