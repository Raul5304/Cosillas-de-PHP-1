<?php
    $nota1 = 5.7;
    $nota2 = 3.2;
    $nota3 = 9.5;

    if ($nota1 > $nota2 and $nota1 > $nota3){
        echo "La nota 1 es mayor que la nota 2 y 3";
    }
    elseif ($nota2 > $nota1 and $nota2 > $nota3){
        echo "La nota 2 es mayor que la nota 1 y 3";
    }
    else{
        echo "La nota 3 es mayor que la nota 1 y 2";
    }
?>