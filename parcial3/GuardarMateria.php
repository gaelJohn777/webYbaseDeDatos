<?php
    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $semestre = $_POST["semestre"];
    $especialidad = $_POST["especialidad"];

    $sql = "INSERT INTO materias(nombre, semestre, especialidad)VALUES('".$nombre"' ,'".$semestre"','".$especialidad"')";

    if($conexion->query($sql) === TRUE){
        header("Location: consultarmateria.php");
        $conexion->close();
    } else {
        echo "<h2>Ocurrio un error</h2> <p>Error: " .$sql. "<br>" . $conexion_error . "</p>";
        echo "<h3><a href='ConsultarAlumnos.php'>Regresar a alumnos</a></h3>";
    }
?>