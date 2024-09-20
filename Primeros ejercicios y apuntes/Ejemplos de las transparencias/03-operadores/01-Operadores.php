<?php
//En este ejemplo se utilizan los operadores aritmeticos. 
//A continuacion vamos a sumar,restar, multiplicar y dividir dos numero.
//Creamos las variables que contiene los numeros
$numero1 = 40;
$numero2 = 21;

//Estas variables son cadenas
$cadena1 = "Hola ";
$cadena2 = "mundo";

//realizamos la concatenación
echo ($cadena1 . $cadena2); //Hola mundo
print("<br>");
//realizamos la suma
echo ($numero1 + $numero2); //61 //no es necesario parentensis aqui

//realizamos la suma
$suma = $numero1 + $numero2;
//realizamos la resta
$resta = $numero1 - $numero2;
//realizamos la multiplicación
$multiplicacion = $numero1 * $numero2;
//realizamos la división
$division = $numero1 / $numero2;
?>


<html>
<body>
[ICO]	Name	Last modified	Size	Description
[PARENTDIR]	Parent Directory	 	-	 
[DIR]	Ejemplos de las tran..>	2024-09-19 13:50	-	 
[TXT]	ej1variables.php	2024-09-19 13:48	287	 
[TXT]	holamundo.php	2024-09-19 13:33	34	 
Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.0.30 Server at localhost Port 80
<h1>En este ejemplo se muestran por pantalla la suma, resta, multiplicacion, division de los numeros </h1>
<h3>Numero 1: <?php echo $numero1?></h3>
<h3>Numero 2: <?php echo $numero2?></h3>
<h4><b>La suma de los dos numeros es:</b><?php echo $suma?></h3>
<h4><b>La resta de los dos numeros es:</b><?php echo $resta?></h3>
<h4><b>La multiplicacion de los dos numeros es:</b><?php echo $multiplicacion?></h3>
<h4><b>La division de los dos numeros es:</b><?php echo $division?></h3>
</body>
</html>














