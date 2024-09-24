<?php 
    echo ("Asteriscos: <br>");
   
    for ($var1 = 5 ; $var1 > 0 ; $var1--){
        for($var2 = 5; $var2 >= $var1 ; $var2 --){
            echo "*";
        }
        echo "<br>";
    }

   echo "<br>";

    for ($v1=1; $v1 <= 5; $v1++){
        for ($v2=5; $v2 >= $v1; $v2--){
            echo "*";
        }
        echo "<br>";
    }

    echo "<br>";

  
    for($x=1 ; $x < 5 ; $x++){
        for($j=1 ; $j < $x ; $j++){
            echo "&nbsp;&nbsp;";  //LOS ESPACIOS SE IMPRIMEN ASI 
        }
        for($y=4 ; $y >= $x ; $y--){
            echo "*";
        }
        
       
        echo "<br>";
    }

    
?>