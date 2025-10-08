<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sumamos y restamos días a las fechas</h1>

    <p>Dado que una fecha se guarda en formato de tiempo, o se puede convertir a
    dicho formato en caso de que sea una cadena, parece lógico pensar que se
    puede añadir o restar tiempo a las fechas. Es así, aunque no es tan fácil
    como sumar o restar directamente una cierta cantidad de días a la fecha base.
    En este ejercicio se te pide que averigües cómo se puede sumar o restar una
    cantidad de tiempo a una fecha y que apliques ese conocimiento para mostrar
    por pantalla la fecha de hoy, la de ayer y la de mañana.</p>

    <?php

    $hoy = date("d-m-Y");
    echo "Fecha actual: " . $hoy . "<br>";
    $ayer = date("d-m-Y", strtotime("-1 day"));
    echo "Fecha de ayer: " . $ayer . "<br>";
    $manana = date("d-m-Y", strtotime("+1 day"));
    echo "Fecha de mañana: " . $manana . "<br>";
    ?>
</body>
</html>