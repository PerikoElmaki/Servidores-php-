<?php
include("conexion.php");
$error= false;
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$consulta = "SELECT * FROM usuarios WHERE nombre='$usuario' AND clave='$clave'";

$resultado = mysqli_query($conn, $consulta);

if (mysqli_num_rows($resultado) == 1) {
    echo "Usuario y clave correctos";
    header("LOCATION:menu.php");
}else {
    echo "ERROR en el usuario $usuario o contraseña son incorrectos<br>";
    echo "<a href='inicioSesion.php'>Volver al inicio</a>";
}

session_start();
$fila = mysqli_fetch_array($resultado);
$_SESSION['id'] = $fila['id'];



?>