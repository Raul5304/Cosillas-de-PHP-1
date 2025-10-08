<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <h1>Contador de Números</h1>
    <p>En esta página se mostrarán dos contadores:</p>
    <ul>
        <li>Un contador del 1 al 100, separado por comas.</li>
        <li>Una cuenta atrás del 10 al 0, separado por guiones.</li>
    </ul>
    <p><h2>Contador del 1 al 100</h2></p>

    <?php
    $numero = 100;
    for ($i = 0; $i <= $numero; $i++){
        echo ($i < 100) ? $i . ", " : $i;
    }
    ?>

    <p><h2>Cuenta atrás del 10 al 0</h2></p>

    <?php
    $numero2 = 10;

    while ($numero2 != -1){
        echo $numero2;
        if ($numero2 != 0){
            echo "-";
        }
        $numero2--;
    }

    ?>
</body>
</html>

