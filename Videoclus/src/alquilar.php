<?php
include 'conexion.php';
session_start();

$usu = $_SESSION['id'];
$idpeli = $_GET['idpeli'];
$ejemp = $_GET['ejemp'];

$insert = "INSERT INTO peliculas_alquiladas(id, id_usuario, id_pelicula) VALUES (NULL, '$usu', '$idpeli')";
$resultado = mysqli_query($conn, $insert);

// CONTROLAR QUE CUANDO QUEDE A 0 YA NO BAJE
$update = "UPDATE peliculas SET ejemplares=ejemplares-1 WHERE id='$idpeli'";
mysqli_query($conn, $update);

//si llega a menor, que se ponga a cero
if ($ejemp <= 0) {
    $update = "UPDATE peliculas SET ejemplares=0 WHERE id='$idpeli'";
    mysqli_query($conn, $update);
}

echo "<h2> Pelicula alquilada exitosamente</h2>";
echo "<a href='../menu.php'>Volver al menu</a>";
