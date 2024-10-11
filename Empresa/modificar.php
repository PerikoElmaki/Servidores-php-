<?php
    include ("conexion.php");
    $cod=$_GET['codigo'];
   
    // $detail=$_GET['detalle'];
    // $precio=$_GET['precio'];
    // $dto=$_GET['descuento'];
    // $imag="images/". $cod. ".jpg";
    
    //Comprobamos que las variables no sean vacias
    if(!isset($cod)){
        echo "El código del producto no puede ser vacío";
    }else{
        //comprobamos las variables una a una 
        if(isset($_GET['producto'])){
            echo"prod";
            //modificamos la sentencia SQL
            $prod=$_GET['producto'];
            $consulta = "UPDATE productos SET producto='$prod' WHERE codigo='$cod'";
            echo "Producto modificado exitosamente";
        }
        
    }
    
    mysqli_query($conn, $consulta);
   
    echo mysqli_error($conn);
    // header ("Location:listado.php");
?>