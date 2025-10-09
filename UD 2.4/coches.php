<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coches</title>
    <style>
        table, th{
            border: 1px solid black;
            text-align: center;
        }
        th{
            background-color: black;
            color: white;
        }
        td{
            border-top: 1px solid black;
        }
    </style>
</head>
<body>
    <?php

    $coches = [
        "1111ABC" => ["Invetero", "Coquette", 3],
        "1234ZXY" => ["Enus", "Deity", 5],
        "3518RPL" => ["Albany", "Emperor", 5],
        "0000ALO" => ["Vapid", "Dominator GTT", 3],
        "3572OPA" => ["Pegassi", "Vacca",  3]
    ];

    ksort($coches);

    echo "<table>";
    echo "<tr><th>Matrícula</th><th>Marca</th><th>Modelo</th><th>Puertas</th></tr>";

    foreach ($coches as $matricula => $datos) {
        echo "<tr>";
        echo "<td>$matricula</td>";
        echo "<td>{$datos[0]}</td>";
        echo "<td>{$datos[1]}</td>";
        echo "<td>{$datos[2]}</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>