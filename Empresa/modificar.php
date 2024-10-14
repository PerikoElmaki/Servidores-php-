<?php
//Estableciendo la conexión
include("conexion.php");
//recogida de datos
$cod = $_GET['codigo'];
$pro = $_GET['producto'];
$det = $_GET['detalle'];
$pre = $_GET['precio'];
$des = $_GET['descuento'];
$consulta = "UPDATE productos SET producto='$pro',detalle='$det',precio='$pre',descuento='$des' WHERE codigo='$cod'";
echo $consulta;
//ejecutamos la sentencia SQL
mysqli_query($conn, $consulta);
//copiamos la imagen que nos ha llegdi a su carpeta.
echo mysqli_error($conn);

//redireccionamos a la web listados
header("LOCATION:listado.php");

?>