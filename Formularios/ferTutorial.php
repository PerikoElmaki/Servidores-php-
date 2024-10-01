<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de ejemplo</title>
</head>


<body>
	<?php
	// EL isset comprueba si se le ha pasado por el post, y que no estén vacías( no es necesario)
	if(isset($_POST['num1']) && isset($_POST['num2']) && 
	!empty($_POST['num1']) && !empty($_POST['num2'])) {
		$num1=$_POST['num1']; //despues de comprobar se guarda el valor de las variables
		$num2=$_POST['num2'];
		$sms=$num1+$num2;
	}
	?>
	<!-- Método post es el que usamos, para que no se vea en url el nombre y datos de variables -->
	<form action="" method="POST"> 
		 <fieldset> <!--Esto es para el campo de fuera, el dibujo  -->
			<legend>prueba</legend>
			<div id="BloqueFormulario">
				<label for="num1">numero 1:</label>
				<input name="num1" id="num1" value="" size="40" maxlength="100" type="text" class="CampoFormulario" required>
			</div>
			<div id="BloqueFormulario">
				<label for="num2">numero 2:</label>
				<input name="num2" id="num2" value="" size="40" maxlength="100" type="text" class="CampoFormulario" required>
			</div>
			<br />

			<?php
			if(isset($sms)&& !empty($sms) ) {
				echo "La suma de los número introducidos es --> $sms";
			}
			?>

			<br />
			<p><input type="submit" name="login" value="sumar"  /></p>
		</fieldset>
	</form>

</body>
</html>