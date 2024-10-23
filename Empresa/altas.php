<?php

include("conexion.php");

$cod = $_POST['codigo'];
$pro = $_POST['producto'];
$det = $_POST['detalle'];
$pre = $_POST['precio'];
$des = $_POST['descuento'];
$ima = $cod . ".jpg";
$consulta = "INSERT INTO productos (codigo,producto,detalle,precio,descuento,imagen) 
VALUES ('$cod','$pro','$det','$pre','$des','$ima')";

mysqli_query($conn, $consulta);

echo mysqli_error($conn);
$ruta = $ima;
// si tienes imagenes 
COPY($_FILES["imagen"]["tmp_name"], $ruta);
//redireccionamos a la web listados (este fichero lo debeis de crar vosotros)
header("LOCATION:listado.php");
