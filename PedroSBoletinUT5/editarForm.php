<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
</head>

<body>
    <form action="editar.php" method="post">
        <input type="text" name="titulo" value="<?php 
        if(isset($_GET['titulo'])){
             $titulo = $_GET['titulo'];
             echo "$titulo";
        }
        ?>">
        <input type="text" placeholder="Autor" name="autor" required>
        <input type="date" placeholder="Fecha publicación" name="fecha" required>
        <input type="number" placeholder="Disponible (0 no, 1 si)" name="estado" required>
        <input type="submit">
        <input type="reset">
    </form>
</body>

</html>