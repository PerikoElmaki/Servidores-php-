<?php 
    //constantes
    define("IVA",0.21);
    define("DESC",0.07);

    $precio=300;
    $precioIVA=($precio*IVA)+$precio;
    echo ("Precio sin iva -> ". $precio. "<br>"); //punto para concatenar
    echo ("Precio con iva -> $precioIVA". "<br>");

    $precioDESC=$precioIVA-($precio * DESC);

    echo ("Precio con descuento e iva -> $precioDESC");

?>