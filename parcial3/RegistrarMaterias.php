<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
    
</head>
<body>

<?php include 'menu.php' ?>

<div class="container">
  <div class="row">
      <div class="col-12 card p-4">
        <form action="">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="nombre" placeholder="Teclea la materia">
            </div>
            <div class="form-group">
                <label for="semestre">Semestre:</label>
                <input type="number" class="form-control" name="semestre" placeholder="Teclea el semestre">
            </div>
            <div class="form-group">
            <label for="semestre">Especialidad:</label>
            <select name="especialidad" class="form-control">
                            <option value="">Seleccione una especialidad</option>
                            <option value="PROGRAMACION">PROGRAMACIÓN</option>
                            <option value="CONTABILIDAD">CONTABILIDAD</option>
                            <option value="OFIMATICA">OFIMÁTICA</option>
                            <option value="CONSTRUCCION">CONSTRUCCIÓN</option>
                            <option value="ELECTRÓNICA">ELECTRÓNICA</option>
                        </select><br>
            </div>
        </form>

      </div>

  </div>

</div>
</body>
</html>