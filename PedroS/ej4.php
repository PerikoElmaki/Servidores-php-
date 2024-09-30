<?php
    $ron="brugal";
    $cola="pepsi";

    echo "$ron". " + ". "$cola<br>";
    
    $vaso=$ron;
    $ron=$cola;
    $cola=$vaso;

    echo "$ron". " + ". "$cola";
?>