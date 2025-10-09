<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <style>
        table, th, td{
            border: 2px solid black;
            border-radius: 1px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>TABLA DE MULTIPLICAR</h1>
    <?php

    $tablamultiplicar = array();

    for ($i = 0; $i < 11; $i++){
        for ($j = 0; $j <= 10; $j++){
            $tablamultiplicar[$i][$j] = $i * $j;
        }
    }

    ?>
    <table>
        <?php
        for ($i = 0; $i < count($tablamultiplicar); $i++){
            echo "<tr>";
            for ($j = 0; $j < count($tablamultiplicar[0]); $j++){
                echo "<td>" . $tablamultiplicar[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table><p></p>
    <?php
    for ($i = 0; $i < count($tablamultiplicar); $i++){
        echo "Tabla del " . $i . "<br>";
        for ($j = 0; $j < count($tablamultiplicar[0]); $j++){
            echo $i . " x " . $j . " = " . $tablamultiplicar[$i][$j] . "<br>";
        }
        echo "<p></p>";
    }



    ?>
</body>
</html>

