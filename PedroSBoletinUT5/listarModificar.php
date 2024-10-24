<html><a href="menu.php"><h1>Volver al menu</h2></a></html>

<?php
include 'conexion.php';

$consulta = "SELECT * FROM libros";
$resultado = mysqli_query($conn, $consulta);


while ($fila = mysqli_fetch_array($resultado)) {

    $titulo = $fila['titulo'];
    $autor = $fila['autor'];
    $fecha = $fila['fecha'];
    $estado = $fila['estado'];

    echo "<div class='contenedor'>";
    echo "<h2>Titulo: $titulo</h2>";
    echo "<h3>Autor: $autor</h3>";
    echo "<p>Fecha publicación: $fecha</p>";
    if ($estado == 1) {
        echo "<p>Disponible </p>";
    } else {
        echo "<p>NO DISPONIBLE</p>";
    }
    echo "<a href='editarForm.php?titulo=$titulo'>Editar</a>";
    echo "<br>";
    echo "<a href='eliminar.php?titulo=$titulo'>Eliminar</a><br>";
    echo "<br><br>";
}


?>