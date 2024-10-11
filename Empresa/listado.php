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
    <table class="listado">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Producto</th>
                <th>Detalle</th>
                <th>Precio</th>
                <th>Descuento</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
<?php   
//recorremos la tabla productos y mostramos los datos
while($fila = mysqli_fetch_array($resultado)){
    $cod= $fila['codigo'];
    echo "<tr>";
    echo "<td>".$fila['codigo']."</td>";
    echo "<td>".$fila['producto']."</td>";
    echo "<td>".$fila['detalle']."</td>";
    echo "<td>".$fila['precio']."</td>";
    echo "<td>".$fila['descuento']."</td>";        
    echo "<td><img src=\"".$fila['imagen']."\" alt=\"".$fila['codigo']."\" /></td>";
    // para que genere un enlace a la pagina de modificacion de productos guardándose el código del producto
    // ?variable forma de llevarte información a la página enlazada
    echo "<a href=modificar.php?codigo=$cod> Modificar</a>";
    // otro enlace para borrar 
    echo "<a href=borrar.php?codigo=$cod> Modificar</a>";
    echo "</tr>";
}
?>
        </tbody>
    </table>

    <div class="abajo">
        <a href="menu.php" id="menu" class="botones">Volver al menu</a>
    </div>
</body>

</html> 