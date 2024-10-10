<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contarPalabra</title>
</head>

<body>
    <h1>Contar palabra</h1>
    <form method="post">
        <label for="ingresado">Ingrese la cadena: </label>
        <input type="text" name="ingresado" id="ingresado">
        <label for="buscar">Buscar palabra: </label>
        <input type="text" name="buscar" id="buscar">
        <input type="submit" value="Enviar">
    </form>

    <h2>Resultado</h2>
    <p id="resultado"></p>

    <?php

    if (isset($_POST['ingresado'])) {
        $cadena = trim($_POST['ingresado']);
        $palabra = trim($_POST['buscar']);
        
        $cadena = strtolower($cadena);
        $palabra = strtolower($palabra);

        function contarPalabra($cadena, $palabra) {
            $contador = 0;
            $longitud = strlen($cadena);
            for ($i = 0; $i < $longitud; $i++) {
                if (substr($cadena, $i, strlen($palabra)) == $palabra) {
                    $contador++;
                }
            }
            return $contador;
        }
        
        echo "<p id='resultado'>" . contarPalabra($cadena, $palabra) . "</p>";
    }
    ?>
</body>

</html>