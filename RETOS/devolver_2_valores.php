<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><h1>Una función que devuelve más de un valor</h1></p>

<p>Hemos visto en el apartado que una función solo puede devolver un dato.<br>
Así, podríamos pasar a una función un array y que nos devolviera el elemento que ocupa la primera posición, 
o bien el que ocupa la última posición, pero no podría devolver los dos datos.<br>
¿O sí? ¿Se te ocurre alguna forma? Intenta crear una función a la que se le pase como parámetro un array desordenado de 10 elementos numéricos y devuelva tres datos:<br>
<p>El valor más bajo de los 10 números, el más alto y el valor medio.
    </p>


    <?php

        function arrayMinMaxMid($array){
            $min = min($array);
            $max = max($array);
            $mid = array_sum($array) / count($array);
            return ["Valor mínimo: $min ", "Valor máximo: $max ", "Valor promedio: $mid "];
        }

        $arraynum = [2,4,6,8,10,12,14,16,18,20];

        $solution = arrayMinMaxMid($arraynum);

        foreach ($solution as $printArr){
            echo $printArr;
        }

    ?>
</body>
</html>