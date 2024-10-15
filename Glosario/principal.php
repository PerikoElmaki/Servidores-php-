<!-- Para conectar primeramente a la base de datos necesitamos archivo conexion -->
<?php
// ARCHIVO conexion.php
$servidor = "localhost";
$user = "root";
$clave = "";
$bd = "nombre";

$conn = mysqli_connect($servidor, $user, $clave);
//Seleccionamos la base de datos 
mysqli_select_db($conn, $bd);
//Imprimimos si hay algún error
echo mysqli_error($conn);

mysqli_query($conn, "SET NAMES'utf8'");
//si hay error 
echo mysqli_error($conn);
?>

<!-- ESE es el archivo principal, luego en el resto necesitaremos llamarlo -->
<?php 
    include("conexion.php");
?>

<!-- En  formularios, atributo action="paginaDondeMetesLogica.php" -->
<!-- Lo mandas a donde quieras, e incluyes conexion.php -->
<?php

include("archivoConexion.php");

//Recoges datos de formulario, ATENTO AL MËTODO QUE ELIGES 
//recogida de datos
$cod = $_POST['codigo'];

// Metes consulta 
$consulta = "INSERT INTO productos (codigo,producto,detalle,precio,descuento,imagen) 
VALUES ('$cod','$pro','$det','$pre','$des','$ima')";

//ejecutamos la sentencia SQL, $conn del archivo conexion
mysqli_query($conn, $consulta);

//si tienes imagenes necesitas un copy 
COPY($_FILES["imagen"]["tmp_name"], $ruta);
//redireccionamos a la web que quieras
header("LOCATION:pagina.php");
?>