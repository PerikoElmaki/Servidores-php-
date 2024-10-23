<?php
$servidor = "localhost";
$user = "root";
$clave = "";
$bd = "empresa";

$conn = mysqli_connect($servidor, $user, $clave);

mysqli_select_db($conn, $bd);

echo mysqli_error($conn);

mysqli_query($conn,"SET NAMES'utf8'");
//si hay error 
echo mysqli_error($conn);
?>