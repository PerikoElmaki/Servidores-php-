<?php
include 'conexion.php';




$consulta = "SELECT * FROM peliculas WHERE id IN (SELECT id_pelicula FROM peliculas_alquiladas WHERE id_usuario='$usu')";
$resultado = mysqli_query($conn, $consulta);


while ($fila = mysqli_fetch_array($resultado)) {
    $id = $fila['id'];
    $titulo = $fila['titulo'];
    $desc = $fila['descripcion'];
    $ejemplares = $fila['ejemplares'];

    echo "<div class='contenedor'>";
    echo "<h1>$titulo</h1>";
    echo "<p>$desc</p>";
    
}
