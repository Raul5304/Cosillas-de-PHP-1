<?php
    function calculaDescuento($precio, $descuento = 0){
        if ($descuento != 0){
            return $preciocondescuento = $precio - ($precio * ($descuento / 100));
        }
        else{
            return $precio;
        }
    }

    echo calculaDescuento(100, 10);
    echo "<br>";
    echo calculaDescuento(250, 10);
    echo "<br>";
    echo calculaDescuento(85);
    echo "<br>";
    echo calculaDescuento(500, 50);
?>