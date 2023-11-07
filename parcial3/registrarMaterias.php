<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
    
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
                <option value="">Seleccione una especialidad</option>
                <option value="PROGRAMACION">PROGRAMACION</option>
                <option value="CONTABILIDAD">CONTABILIDAD</option>
                <option value="OFIMATICA">OFIMATICA</option>
                <option value="CONSTRUCCION">CONSTRUCCION</option>
                <option value="ELECTRONICA">ELECTRONICA</option>
            </div>
        </form>

      </div>

  </div>

</div>
</body>
</html>