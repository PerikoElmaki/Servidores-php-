<html>

<head>
    <title>MODIFICAR</title>
    <link rel="stylesheet" href="assets/styles.css" />
</head>

<body>
    <?php
    //Estableciendo la conexión
    include("../conexion.php");
    //guardas variables que pasas por el get (a traves de enlace)
    $cod = $_GET['codigo'];
    $producto = $_GET['producto'];
    $detalle = $_GET['detalle'];
    $precio = $_GET['precio'];
    $descuento = $_GET['descuento'];
    

    //creamos la sentencia SQL
    $consulta = "select * from productos where codigo='$cod'";
    $result = mysqli_query($conn, $consulta);
    //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
    echo mysqli_error($conn);
    //ejecuta consulta 
    $row = mysqli_fetch_array($result);
    //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
    echo mysqli_error($conn);

    ?>
    <h1 class="altasTitle"> Modificar</h1>
    <form action="../modificar.php" method="get" enctype="multipart/form-data">
        <div class="primeraColum">
            <label for="codigo">Artículo a modificar</label>
            <!-- Controlamos que se pueda acceder sin antes insertar el código -->
            <input type="text" name="codigo" value="<?php echo $cod; ?>" readonly />
            <label for="producto">Producto</label>
            <input type="text" name="producto" value="<?php echo $producto; ?>" required />
            <label for="detalle">Detalle</label>
            <input type="text" name="detalle" value="<?php echo $detalle; ?>" required />
        </div class="segundaColum">

        <div class="segundaColum">
            <label for="precio">Precio</label>
            <input type="text" name="precio" value="<?php echo $precio; ?>" required />
            <label for="descuento">Descuento</label>
            <input type="text" name="descuento" value="<?php echo $descuento; ?>" required />
          
        </div>

        <div class="botones">
            <input type="submit" name="button" value="Modificar" />
            <input type="reset" name="button2" value="Restablecer" />
        </div>

    </form>


    <div class="abajo">
        <a href="../menu.php" id="menu" class="botones">Volver al menu</a>
    </div>
</body>


</html>