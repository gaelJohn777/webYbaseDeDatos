<?php
$server = "localhost:3306";
$user = "root";
$password = "root";
$basededatos = "alumnos.sql";

$conexion = new mysqli($server, $user, $password, $basededatos);

if($conexion->connect_error){
    die("Fallo la conexion" .$conexion->connect_error);
}
?>