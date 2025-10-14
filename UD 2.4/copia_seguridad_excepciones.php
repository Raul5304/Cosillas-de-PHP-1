<?php
try{
    // Definir el archivo de origen
    $archivoOrigen = 'datosss.txt';

    if (!file_exists($archivoOrigen)){
        throw new Exception("El archivo $archivoOrigen no existe");
    }

    $contenido = file_get_contents($archivoOrigen);

    if ($contenido === false){
        throw new Exception("Error al leer el archivo $archivoOrigen");
    }

    $archivoDestino = 'copia_datos.txt';
    $resultado= file_put_contents($archivoDestino, $contenido);

    if ($resultado === false){
        throw new Exception("Error al escribir en el $archivoDestino");
    }

    echo "Copia de seguridad realizada con éxito"
} catch (Exception $e){
    echo "Se produjo un error: " . $e->getMessage();
}
    ?>