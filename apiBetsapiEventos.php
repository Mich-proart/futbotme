<?php
// URL del endpoint
$url = 'https://api.betsapi.com/v1/event/view?token=153716-4djEyj4e6JZVou&LNG_ID=3&event_id='.$_POST['id'];


// Inicializar la solicitud cURL
$ch = curl_init();

// Establecer la URL
curl_setopt($ch, CURLOPT_URL, $url);

// Ejecutar la solicitud
$response = curl_exec($ch);

// Verificar si hubo algún error en la solicitud
if (curl_errno($ch)) {
    echo 'Error en la solicitud: ' . curl_error($ch);
} else {
    return json_encode($response);
}

// Cerrar la conexión cURL
curl_close($ch);
?>