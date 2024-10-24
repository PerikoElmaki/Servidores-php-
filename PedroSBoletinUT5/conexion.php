<?php
    $servidor ="localhost"; 
    $user = "root";
    $clave = "";
    $bd = "librosdaw";

    $conn = mysqli_connect($servidor ,$user,$clave);
    mysqli_select_db($conn, $bd);
    mysqli_query($conn,"SET NAMES'utf8'");


?>