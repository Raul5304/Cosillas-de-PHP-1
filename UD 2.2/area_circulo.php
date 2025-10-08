<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area círculo</title>
</head>
<body>
    <?php
        define ('PI', 3.1416); // Creo la constante PI, pero se puede utilizar M_PI, que es la constante PI ya creada por php
        $radio = 3.5;
        $longitud = 2 * M_PI * $radio;

        echo "La longitud de la circunferencia es " . number_format($longitud, 2)
    ?>
</body>
</html>