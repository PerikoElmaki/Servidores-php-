<?php
include("conexion.php");

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];

$consulta = "INSERT INTO libros VALUES ('$titulo','$autor','$fecha','$estado',NULL)";

mysqli_query($conn, $consulta);


header("LOCATION:listarModificar.php");

?>