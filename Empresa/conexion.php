<?php
$servidor = "localhost";
$user = "root";
$clave = "";
$bd = "empresa";
//Establecimiento de la conexión al servidor localhost, 
//con el usuario root y sin clave
$conn = mysqli_connect($servidor, $user, $clave);
//Seleccionamos la base de datos empresa
mysqli_select_db($conn, $bd);
//Imprimimos si hay algún error
echo mysqli_error($conn);

mysqli_query($conn,"SET NAMES'utf8'");
//si hay error 
echo mysqli_error($conn);
?>