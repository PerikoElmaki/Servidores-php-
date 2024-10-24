<?php
include("conexion.php");

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];

$consulta = "UPDATE libros SET autor='$autor' , fecha='$fecha' , estado='$estado' WHERE titulo='$titulo'";


mysqli_query($conn, $consulta);


header("LOCATION:listarModificar.php");
?>