<?php
include("conexion.php");

$titulo = $_GET['titulo'];


$consulta = "DELETE FROM libros WHERE titulo='$titulo'";

mysqli_query($conn, $consulta);


header("LOCATION:eliminarMensaje.php");
