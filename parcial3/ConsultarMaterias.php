<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar materias</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php
      
      include 'menu.php';
      include 'conexion';

      $sql = "SELECT * FROM materias";
      $datos = $conexion->query($sql);

    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if($datos->num_rows > 0){ ?>
                    <div class="table-responsive card m-4 p-2">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Semestre</th>
                                <th>Opciones</th>
                            </tr>
                          </thead>
                        </table>
                    </div>
                
                

            </div>

        </div>
    </div>
</body>
</html>