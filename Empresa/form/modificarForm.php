<html>

<head>
    <title>MODIFICAR</title>
    <link rel="stylesheet" href="assets/styles.css" />
</head>

<body>
    <h1 class="altasTitle"> Modificar</h1>
    <form action="../modificar.php" method="get" enctype="multipart/form-data">
        <div class="primeraColum">
            <label for="codigo">Artículo a modificar</label>
            <!-- Controlamos que se pueda acceder sin antes insertar el código -->
            <input type="text" name="codigo"    
            value="
            <?php 
                if(isset($_GET['codigo'])){
                    echo $_GET['codigo']; 
                }else {
                    echo "0";
                }
            
            ?>"/>

            <label for="producto">Producto</label>
            <input type="text" name="producto" />
            <label for="detalle">Detalle</label>
            <input type="text" name="detalle" />
        </div class="segundaColum">

        <div class="segundaColum">
            <label for="precio">Precio</label>
            <input type="text" name="precio" />
            <label for="descuento">Descuento</label>
            <input type="text" name="descuento"/>
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen"/>
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