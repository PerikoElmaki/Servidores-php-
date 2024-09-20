<?php
    $var1=10;
    $var2=20;

    $var3=$var1;
    echo "VAr1: ". $var1. " Var  2 : ". $var2;
    $var1=$var2;
    $var2=$var3;

    echo "<br>VAr1: ". $var1. " Var  2 : ". $var2;
?>