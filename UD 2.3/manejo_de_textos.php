<?php
    define ('PI', 3.1416);
    $radio = 10;
    $area = PI * $radio;
    $textoresultado = "El área calculada del círculo es: ";
    echo $textoresultado . number_format($area, 2) . "<br>";
    $textoresultadoMayus = strtoupper($textoresultado);
    echo $textoresultadoMayus . number_format($area, 2) . "<br>";
    $textoResultadoModificado = str_replace('calculada', 'obtenida', $textoresultado);
    echo $textoResultadoModificado . number_format($area, 2) . "<br>";
    echo strlen($textoResultadoModificado) . "<br>";
    echo strpos($textoResultadoModificado, 'círculo') . "<br>";
    $numeros = "1,2,3,4";
    $numerossuma = explode(",", $numeros);
    $numeros2 = implode("+", $numerossuma);
    $numerosresultado = $numeros2;
    echo $numerosresultado;
?>