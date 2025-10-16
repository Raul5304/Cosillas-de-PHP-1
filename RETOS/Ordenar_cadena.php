<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar cadena</title>
</head>
<body>
    <p><h1>ORDENAR CADENA ALFABÉTICAMENTE</h1></p>

    <p>Supongamos que tenemos una cadena que contenga una frase con varias palabras separadas por un espacio en blanco. Queremos reordenar la cadena alfabéticamente, 
        de forma que la nueva cadena esté formada por las mismas palabras, pero ordenadas en orden alfabético de menor a mayor.<br>
    Por ejemplo, si tenemos la cadena «esto es una cadena»>, el resultado obtenido después de reordenarla alfabéticamente debería ser «cadena es esto una».<br>
    ¿Cómo podemos conseguir que las palabras de la cadena original se reordenen de esa forma?</p>

    <?php

    $string = "esto es una cadena";

    $array = explode(" ", $string);

    sort($array);

    $stringOrdered = implode(" ", $array);

    echo $stringOrdered;

    ?>
</body>
</html>