<?php
// Ruta del archivo a crear y del tokken y de la peticion
$ruta = __DIR__ . '/directos.json';
$tokken_api = "153716-4djEyj4e6JZVou";
$url_inplay_api = "https://api.b365api.com/v3/events/inplay?sport_id=1";

//El resulado de la peticion devuelve solo la primera pagina, abria que hacer llamadas recursivas con la finalidad de obtener todas las paginas.. URGENTE HABLAR CON JORGE

// leemos url y  guardamos los datos en un json
$url = $url = $url_inplay_api."&token=".$tokken_api."&LNG_ID=3";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);

if ($data !== false) {
    $decoded_data = json_decode($data, true);

    if ($decoded_data !== null) {
        $json_data = json_encode($decoded_data, JSON_PRETTY_PRINT);

        if (file_put_contents($ruta, $json_data) !== false) {
            echo "Los datos se han guardado en directos.json";
        } else {
            echo "Error al guardar los datos en el archivo.";
        }
    } else {
        echo "Error al decodificar los datos JSON.";
    }
} else {
    echo "Error al obtener los datos de la URL.";
}

curl_close($ch);
?>
