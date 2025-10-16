<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letra de DNI</title>
    <style>
        body{
            font-family: "Arial";
        }
    </style>
</head>
<body>
<p><h1>La Letra del DNI</h1><p>
<p>Como sabrás, un DNI está formado por una lista de números (máximo 8) y una letra final.<br></p>
<p>Dicha letra no está puesta al azar, sino que depende del número del DNI y puede calcularse mediante una fórmula.<br>
Para ello, primero hay que dividir el número del DNI entre 23 y quedarse con el resto de la división.<br>
Este resto, lógicamente, tendrá un valor situado entre 0 (si la división es exacta) y 22.<br>
Con ese valor hay que ir a una tabla y buscar la letra correspondiente.<br>
El orden de las letras en la tabla es el siguiente: TRWAGMYFPDXBNJZSQVHLCKE.<br>
La «T»> ocupa la posición 0, mientras que la «E» ocupa la posición 22.<br></p>
<p>Buscando la letra que ocupa la posición correspondiente al resto obtenido al dividir el DNI por 23 obtendremos el resultado que necesitamos.<br>
Se pide que realices una función que reciba un DNI numérico y devuelva la letra que le corresponde según la fórmula que hemos visto.<br>
En caso de que el DNI contenga ya alguna letra o caracteres no numéricos, o en caso de que su longitud sea mayor que 8,
la función devolverá como resultado «DNI NO VÁLIDO». Si el DNI es válido (numérico, entre 1 y 8 dígitos), entonces devolverá la letra que le corresponda.</p>

<?php
    function testDNI($dni){
        if((strlen($dni) < 1 or strlen($dni) > 8) or !is_numeric($dni)){
            return "DNI no válido";
        }
        $lettersCalc = 'TRWAGMYFPDXBNJZSQVHLCKE';
        return $lettersCalc[$dni % 23];
    }

    echo testDNI("73230225");
?>
</body>
</html>