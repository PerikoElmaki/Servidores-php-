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
            <input type="text" id="num" name="num" placeholder="Introduce número de lineas">
            <br>
            <input type="submit" value="Enviar">
            <br>
        </fieldset>
    </form>

    <?php
        $num = $_POST['num'];
        if(isset($_POST['num'])){
            if(!is_numeric($_POST['num'])){
                echo 'No es un número';
            }else{
                for($i=1; $i<=$num; $i++){
                    for($j=1; $j<=$i; $j++){
                        echo '*';
                    }
                    echo '<br>';
                }
                echo '<br>';
                for($i=$num; $i>=1; $i--){
                    for($j=1; $j<=$i; $j++){
                        echo '*';
                    }
                    echo '<br>';
                }
                
            }    
        }
    ?>

</body>
</html>