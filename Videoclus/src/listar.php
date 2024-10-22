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
        if ($ejemplares <= 0) {
            echo "<h3>No disponible</h3>";
        } else {
            echo "<a href='src/alquilar.php?idpeli=$id&peli=$titulo&ejemp=$ejemplares'>Alquilar</a>";
        }
        
    }


?>