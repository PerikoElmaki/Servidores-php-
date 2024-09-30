<?php
    //Calculando precio total
    
    $precioart=20;
    $cant=5;
    $porcentaje=10;
    $descuento=($precioart*$cant)*0.1;
    $total=($precioart*$cant)-$descuento;

    echo "Kilo de cigalas -> ". $precioart. "$<br>"; 
    echo "Cantidad ->". $cant. "<br>";
    echo "Descuento ->". $porcentaje. "%<br>";
    echo "Precio final --->". $total. "$";
?>