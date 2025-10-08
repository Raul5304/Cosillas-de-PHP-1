<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Famoso Fizz Buzz</title>
</head>
<body>
    <h1>RETO 1</h1>
    <p><h2>El Famoso FizzBuzz</h2></p>
    <p>Dificultad: FÁCIL</p>
    <p>Enunciado: Escribe un programa que muestre los números de 1 a 100 (ambos incluidos y con un salto de línea entre cada impresión), sustituyendo los siguientes:</p>
    <ul>
        <li>Múltiplos de 3 por la palabra "fizz".</li>
        <li>Múltiplos de 5 por la palabra "buzz".</li>
        <li>Múltiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".</li>
    </ul>

    <?php

    $numero = 100;

    for ($i = 0; $i <= 100; $i++){
        if ($i % 3 == 0 and $i % 5 == 0){
            echo "fizzbuzz";
        }
        elseif ($i % 3 == 0){
            echo "fizz";
        }
        elseif ($i % 5 == 0){
            echo "buzz";
        }
        else{
            echo $i;
        }
        echo "<br>"; 
    }

    ?>
</body>
</html>

