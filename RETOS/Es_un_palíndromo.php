<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Es un palíndromo?</title>
</head>
<body>
    <h1>¿ES UN PALÍNDROMO?</h1>
 <p>Dificultad: MEDIA</p>

 <p>Enunciado: Escribe una función que reciba un texto y retorne verdadero o falso (Boolean) según sean o no palíndromos. 
    Un Palíndromo es una palabra o expresión que es igual si se lee de izquierda a derecha que de derecha a izquierda. 
    NO se tienen en cuenta los espacios, signos de puntuación y tildes.</p>
    
    <p>Ejemplo: Ana lleva al oso la avellana.</p>

    <?php

    function isPalindrome($text){
        $text = strtolower($text);
        $text = str_replace(
            array('á', 'é', 'í', 'ó', 'ú','ü','ñ'), 
            array('a', 'e', 'i', 'o', 'u','u','n'), $text);
        $text = preg_replace('/[^a-z0-9]/', "", $text);
        

        return $text === strrev($text);
    }
    
    echo isPalindrome("Ana") . "<br>";
    echo isPalindrome("ana") . "<br>";
    echo isPalindrome("A man, a plan, a canal, Páñama") . "<br>";
    echo isPalindrome("6285B3249", "<br>");

    ?>
</body>
</html>