<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundos</title>
</head>
<body>
    <?php
         $segundos = date("s");
         echo "Segundos: $segundos <br>" ;
         if ($segundos % 2 == 0) {
             echo "El segundos es par";
             
             $suma = 0;
             for ($i = 0; $i < $segundos; $i++) {
                 if ($i % 2 == 0) {
                     $suma += $i;
                 }
             }
             
             $archivo = fopen("resultado.txt", "a");
            

             fwrite($archivo, $suma.PHP_EOL);

             fclose($archivo);

         } else {
             echo "El segundos es impar";
             
         }
    ?>
</body>
</html>

