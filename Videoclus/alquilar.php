<?php
    include 'conexion.php';
    session_start();
    
    $usuario = $_SESSION['id'];
// NO FUNCIOAN 
    $idpeli = $_POST['idpeli'];

    $insert = "INSERT INTO peliculas_alquiladas (id, id_usuario, id_pelicula) VALUES ('null', '$usuario', '$idpeli')";
    $resultado = mysqli_query($conn, $insert);

    $update = "UPDATE peliculas SET ejemplares=ejemplares-1 WHERE id='$idpeli'";

    echo "<h2> Pelicula $peli alquilada exitosamente</h2>";
?>