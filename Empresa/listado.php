<!-- Listamos todos los productos que se encuentren en la tabla productos -->
<?php
include ("conexion.php");

//creamos la sentencia SQL
$consulta = "SELECT * FROM productos";
//ejecutamos la sentencia SQL, atributos conn en conexion.php 
$resultado = mysqli_query($conn,$consulta);
echo mysqli_error($conn);
?>
<html>
<head>
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="assets/styles.css" />
</head>

<body>
    <h1 class="listadoTitle"> Listado de Productos </h1>
    
<?php   
//recorremos la tabla productos y mostramos los datos
while($fila = mysqli_fetch_array($resultado)){
    $cod= $fila['codigo'];
    echo $fila['codigo']. "<br>";
    echo $fila['producto'] . "<br>";
    echo $fila['detalle'] . "<br>";
    echo $fila['precio'] . "$". "<br>";
    echo $fila['descuento'] . "% dto". "<br>";
    echo "<img src=images/". $fila['imagen']. " width=100px height=100px>";
    echo "<br>";

    // para que genere un enlace a la pagina de modificacion de productos guardándose el código del producto
    echo "<a href=./form/modificarForm.php?codigo=$cod> Modificar</a>";
    echo "<br>";
    // para que genere un enlace a la pagina de eliminación de productos guardándose el código del producto
    echo "<a href=eliminar.php?codigo=$cod> Eliminar</a>";
    echo "<br>";
    echo "<br>";

}
?>
    <div class="abajo">
        <a href="menu.php" id="menu" class="botones">Volver al menu</a>
    </div>
</body>

</html> 