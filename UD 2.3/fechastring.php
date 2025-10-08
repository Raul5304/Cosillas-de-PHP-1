<!-- Sabemos que podemos extraer información de una cadena de varias maneras, 
siempre usando las funciones que nos facilita el lenguaje PHP. 
Particularmente útil es la función substr(), que permite extraer 
una sub-cadena de una cadena principal a partir de una posición de inicio 
y una longitud. Vamos a intentar usar la función para extraer las 
diferentes partes de una cadena que contenga una fecha con un formato 
determinado pero con una longitud variable. 

Supongamos que tenemos una variable de tipo string que contiene una fecha 
en el formato «día de mes de año». Por ejemplo, «10 de marzo de 2022». 
Ya sabemos que existen funciones de fecha que nos permitirán convertir 
esa cadena a fecha, de forma que, posteriormente, con otras funciones de fecha, 
podríamos extraer sus diferentes partes: el día, el mes y el año. 
Sin embargo, en este caso práctico extendido vamos a trabajar 
solamente con las funciones de cadena. 

Teniendo en cuenta que, como hemos comentado, solo podemos usar funciones 
que trabajen con el tipo string, de qué forma podríamos extraer la información 
de la cadena para que nos mostrase por pantalla, en líneas distintas, el día, 
el mes y el año? Recuerda que no sabemos exactamente en qué posiciones estarán 
las palabras «de», porque el día puede tener 1 o 2 dígitos, y la longitud del 
mes puede ser muy variable. Sin embargo, recuerda también que dichas posiciones se 
pueden calcular. -->

<?php

$fecha = "23 de Octubre de 2014";

$pos1 = strpos($fecha, "de");
$pos2 = strpos($fecha, "de", $pos1 + 2);

$dia = trim(substr($fecha, 0, $pos1));

$mes = trim(substr($fecha, $pos1 + 2, $pos2 - ($pos1 + 2)));

$anio = trim(substr($fecha, $pos2 + 2));

echo "Día: " . $dia . "<br>";
echo "Mes: " . $mes . "<br>";
echo "Año: " . $anio . "<br>";
?>