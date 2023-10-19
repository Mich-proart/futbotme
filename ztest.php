<?php
// Contenido del archivo
$contenido = date("H:i:s");

// Ruta del archivo a crear
$ruta = __DIR__ . '/nuevo_archivo.txt';

// Intenta escribir el archivo
if (file_put_contents($ruta, $contenido) !== false) {
    echo "El archivo se creó correctamente con el cron en: $ruta";
} else {
    echo "Hubo un error al crear el archivo.";
}
?>
