<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <!-- DIbujo -->
        <fieldset>
            <input type="number" id="num" name="num" min="1" max="9" required>
            <br>
            <input type="submit" value="Enviar">
            <br>
        </fieldset>

    </form>


    <?php
    // Primero compruebe si no es null 

    if (isset($_POST['num'])) {
        $num = $_POST['num'];
        // Abrir ela rchivo para escribir en el 

        $archivo = fopen("numeros.txt", "a"); //w de write  a, para agregar más 
        fputs($archivo, "TABLA DEL " . $num . PHP_EOL);
        for ($i = 1; $i <= 10; $i++) {
            echo $num . ' x ' . $i . ' = ' . $num * $i . '<br>';
            //PHP_EOL es el caracter de salto de linea en archivos 
            fputs($archivo, $num . ' x ' . $i . ' = ' . $num * $i . PHP_EOL);
        }

        fclose($archivo);
    }
    ?>
</body>

</html>