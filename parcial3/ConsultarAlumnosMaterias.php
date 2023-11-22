<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConsultarAlumnosMaterias</title>
    <link rel="stylesheet" href="css/bootstrap">
</head>
<body>
    <?php
    include'conexion.php';
    include'menu.php';

    $sql2 = "SELECT a.*, m.nombre AS materia_nombre FROM alumnos a INNER JOIN alumno_materias am ON a.id = am.
    alumnos_id INNER JOIN materias m ON m.id = am.materia_id";
    $datos = $conexion ->query($sql);
    
    ?>
     <div class="container">
        <div class="new">
           <div class="col-12">
            <?php if($datos->num_rows > 0){ ?>
              <?php while($registro = $datos->fetch_assoc()){
            
              }
            }

           </div>
        </div>
     </div>
</body>
</html>