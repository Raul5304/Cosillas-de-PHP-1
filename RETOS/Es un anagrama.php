<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
¿ES UN ANAGRAMA?
 Dificultad: MEDIA

 Enunciado: Escribe una función que reciba dos palabras (String) y retorne verdadero o falso (Boolean) según sean o no anagramas.
 Un Anagrama consiste en formar una palabra reordenando TODAS las letras de otra palabra inicial.
 NO hace falta comprobar que ambas palabras existan.
 Dos palabras exactamente iguales no son anagrama.

Casos de prueba:
  Roma - Amor -> true
  Amor - Amor -> false
  Amor - Amol -> false<br>

<?php

function esAnagrama($string1, $string2){
  if (strlen($string1) !== strlen($string2)){
    return false;
  }
  $textoMin1 = strtolower($string1);
  $textoMin2 = strtolower($string2);

  if ($textoMin1 === $textoMin2){
    return false;
  }
  
  $texto1 = str_split($textoMin1);
  $texto2= str_split($textoMin2);

  sort($texto1);
  sort($texto2);

  return $texto1 === $texto2;
}

if(esAnagrama("amor", "AMor")){
  echo "Es anagrama";
}else{
  echo "No es anagrama";
}

?>
</body>
</html>