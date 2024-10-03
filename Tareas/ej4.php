<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- metodo post pa q no se vea en la barra -->
    <form action="" method="POST"> 
        Introduce 7 números, separados por comas:
        <input type="text" name="arrayNum" size="20" required>
        <input type="submit" name="enviar" id="enviar">
    </form>

    <?php
      
        // isset para comprobar si se han introducido datos, para ver si variable iniciada
        if (isset($_POST["arrayNum"])){
            echo "<br>";
            echo $_POST["arrayNum"];
            // Explode para quitar el carácter entre comillas, del string que indiques
            $arraySeparado = explode(",", $_POST["arrayNum"]);
            // a cada posicion de array le llamas valor
            foreach ($arraySeparado as $valor){
                echo $valor. "<br>";
            }
        } 
    ?>
</body>
</html>