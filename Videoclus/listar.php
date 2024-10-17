<?php
    include 'conexion.php';
    // listar todas las peliculas de la base de datos
    $consulta = "SELECT * FROM peliculas";
    $resultado = mysqli_query($conn, $consulta);

    while ($fila = mysqli_fetch_array($resultado)) {
        $id = $fila['id'];
        $titulo = $fila['titulo'];
        $desc= $fila['descripcion'];
        $ejemplares= $fila['ejemplares'];

        echo "<div class='contenedor'>";
        echo "<h1>$titulo</h1>";
        echo "<p>$desc</p>";
        echo "<p>Ejemplares: $ejemplares</p>"; 
        echo "<a href='alquilar.php?idpeli=$id&peli=$titulo&'>Alquilar</a>";
    }


?>