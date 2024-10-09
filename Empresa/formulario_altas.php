<html>

<head>
    <title>Altas de Productos</title>
    <link rel="stylesheet" href="css/estilos.css" />
</head>

<body>
    <form action="altas.php" method="post" enctype="multipart/form-data">
        <h1 class="altasTitle"> Altas de Productos </h1>
        <div class="primeraColum">
            <label for="codigo">Codigo</label>
            <input type="text" name="codigo" required />
            <label for="producto">Producto</label>
            <input type="text" name="producto" required />
            <label for="detalle">Detalle</label>
            <input type="text" name="detalle" required />
            <label for="precio">Precio</label>
        </div class="segundaColum">

        <div class="segundaColum">
            <input type="text" name="precio" required />
            <label for="descuento">Descuento</label>
            <input type="text" name="descuento" required />
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" required />
        </div>

        <div class="botones">
            <input type="submit" name="button" value="Enviar" />
            <input type="reset" name="button2" value="Restablecer" />
        </div>

    </form>

    <div class="abajo">
        <button  id="menu" class="botones">Volver al menu</button>
    </div>
</body>

</html>