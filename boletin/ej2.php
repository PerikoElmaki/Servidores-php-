<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio Moneda</title>
</head>

<body>
    <h1>Cambio</h1>
    <form method="post">
        <label for="ingresado"> Ingrese la cantidad a cambiar: </label>
        <input type="number" name="ingresado" id="ingresado">
        <label for="moneda">Cambio a: </label>
        <select name="moneda" id="moneda">
            <option value="euro">Euro</option>
            <option value="dolar">Dolar</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    <h2>Resultado</h2>
    <p id="resultado"></p>
    
    <?php
        
        if(isset($_POST['ingresado'])){
            $ingresado = $_POST['ingresado'];
            $moneda = $_POST['moneda'];
            if ($moneda == "dolar") {
                $resultado = $ingresado*0.9;
                $pantalla = $resultado. " Dolares";
            }else{
                $resultado = $ingresado*1.1;
                $pantalla = $resultado. " Euros";
            }
            echo "<p id='resultado'>$pantalla</p>";
        }
    ?>
</body>

</html>