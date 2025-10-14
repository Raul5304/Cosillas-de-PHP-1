<?php
        // Definir el archivo de origen
        $archivoOrigen = 'datosss.txt';

        $contenido = @file_get_contents($archivoOrigen);

        if ($contenido === false) {
            echo "Error al leer el archivo $archivoOrigen";
            exit;
        }

        // Guardar el contenido en un nuevo archivo copia_datos.txt
        $archivoDestino = 'copia_datos.txt';
        $resultado = @file_put_contents($archivoDestino, $contenido);

        if ($resultado === false) {
            echo "Error al escribir en el archivo $archivoDestino";
            exit;
        }

        echo "Copia de seguridad realizada con éxito.";
    ?>