<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><h1>FACTORIAL<h1></p>
    <p><h2>Dificultad: MEDIA</h2></p>

    <p>Enunciado: Escribe una función que reciba un numero (int) y retorne el factorial de ese número.</p>

    <p>El factorial de n  se define en principio como el producto de todos los números enteros positivos hasta 1.</p>
    <p>Tener en cuenta que el factorial de 0 es 1.</p>

    Resolved el problema de forma iterativa y de forma recursiva.<p>
    <br>
    Casos de prueba:
    <br>
    5!=5x4x3x2x1=120
    <br>

    <?php
        function esFactorial(int $num){
            if($num < 0){
                return null;
            }
            $cont = 1;
            for($i = $num; $i > 0; $i--){
                $cont*=$i;
            }
            return $cont;
        }
        echo esFactorial(5);
    ?>
</body>
</html>