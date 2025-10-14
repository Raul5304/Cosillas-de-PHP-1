<?php
        // Definir el archivo de origen
        $archivoOrigen = 'datosssss.txt';

        // Verificar si el archivo de origen existe
        if (!file_exists($archivoOrigen)) {
            die("El archivo $archivoOrigen no existe.");
        }

        // Leer el contenido del archivo datos.txt
        $contenido = file_get_contents($archivoOrigen);

        if ($contenido === false) {
            die("Error al leer el archivo $archivoOrigen");
        }

        // Guardar el contenido en un nuevo archivo copia_datos.txt
        $archivoDestino = 'copia_datos.txt';
        $resultado = file_put_contents($archivoDestino, $contenido);

        if ($resultado === false) {
            die("Error al escribir en el archivo $archivoDestino");
        }

        echo "Copia de seguridad realizada con éxito.";
    ?>