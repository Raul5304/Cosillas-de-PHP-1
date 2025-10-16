<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Dado</title>
</head>
<body>
<p><h1>CONTANDO ELEMENTOS</h1></p>
Disponemos de un array con una serie de números, de los cuales algunos de ellos están repetidos.<br> 
Se pide escribir una función que muestre las veces que aparece cada uno de los números en el array.<br>  
Dado, por ejemplo, un array con los valores (1, 10, 5, 1, 5,5,8), el programa debería mostrar que el número 1 aparece 2 veces, el número 10 aparece una vez, 
el número 5 aparece 3 veces y el número 8 aparece una vez.<br>

<p>Intenta que cuando el número aparece una vez se muestre la palabra «vez», mientras que, en los números que aparezcan más de una vez, se muestre la palabra «veces».</p>

<?php

$array = [1,5,5,8,1,10];


function countNumbers($array){
    $contador = [];

    // Recorremos el array de números
    foreach ($array as $num) {
        // Si el número ya existe en el array asociativo, incrementamos su contador
        if (isset($contador[$num])) {
            $contador[$num]++;
        } else {
            // Si no existe, lo inicializamos con valor 1
            $contador[$num] = 1;
        }
    }

    // Mostramos el resultado
    foreach ($contador as $array => $veces) {
        if ($veces == 1) {
            echo "El número $array aparece una vez.<br>";
        } else {
            echo "El número $array aparece $veces veces.<br>";
        }
    }
}

countNumbers($array);

?>
</body>
</html>