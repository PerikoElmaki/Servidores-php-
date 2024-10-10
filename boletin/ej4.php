<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="num1">1er numero: </label>
        <input type="number" name="num1" id="num1" required>
        <select name="operacion" id="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Division</option>
        </select>
        <label for="num2">2do numero: </label>
        <input type="number" name="num2" id="num2" required>

        <input type="submit" value="Enviar">
    </form>

    <h2>Resultado</h2>
    <p id="resultado"></p>

    <?php
        if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacion'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacion = $_POST['operacion'];
            if ($operacion == "suma") {
                $resultado = $num1 + $num2;
            } else if ($operacion == "resta") {
                $resultado = $num1 - $num2;
            } else if ($operacion == "multiplicacion") {
                $resultado = $num1 * $num2;
            } else if ($operacion == "division") {
                $resultado = $num1 / $num2;
            }
            echo "<p id='resultado'>$resultado</p>";
        }
    ?>
</body>

</html>