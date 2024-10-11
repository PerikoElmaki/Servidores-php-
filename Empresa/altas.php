<?php
//Estableciendo la conexión
include ("conexion.php");
//recogida de datos
$cod=$_GET['codigo'];
$prod=$_GET['producto'];
$detail=$_GET['detalle'];
$precio=$_GET['precio'];
$dto=$_GET['descuento'];
$imag="images/". $cod. ".jpg";

//creamos la sentencia SQL
$consulta = "INSERT INTO productos (codigo,producto,detalle,precio,descuento,imagen) 
VALUES ('$cod','$prod','$detail','$precio','$dto','$imag')";
//ejecutamos la sentencia SQL, atributos conn en conexion.php 
mysqli_query($conn,$consulta);
//copiamos la imagen que nos ha llegado a su carpeta.
echo mysqli_error($conn);
$ruta=$imag;
//copiamos imagen a la carpeta images
copy($ruta,"images/".$cod.".jpg");

//redireccionamos a la web listados (este fichero lo debeis de crar vosotros)
echo "Producto añadido exitosamente";
header ("LOCATION:listado.php");
?>
