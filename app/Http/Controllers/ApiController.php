<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    /* public function obtenerDatosBestApiPartidosDirecto(){
        // REFERENCIA Y DOCUMENTACION https://betsapi.com/docs/events/faq.html
        // Realizar la solicitud a la API externa
        $data = Http::get('https://api.b365api.com/v3/events/inplay?sport_id=1&token=153716-4djEyj4e6JZVou&LNG_ID=3');

        //$datos = file_get_contents(base_path()."/resources/views/components/inplay.json");

        // Obtener los datos de la respuesta
        $datos = $data->json()['results'];

        // Devolver los datos como respuesta
        //return response()->json($datos);

        //return view('welcome', ['users' => response()->json($datos)]);

        return $datos;
    } */

    public function apiBetsapiEventos(Request $request)
    {
        // URL del endpoint
        $url = 'https://api.betsapi.com/v1/event/view?token=153716-4djEyj4e6JZVou&LNG_ID=3&event_id=' . $_POST['id'];


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
    }

    public function apiBetsapi(Request $request)
    {
        // URL del endpoint
        $url = 'https://api.b365api.com/v1/event/lineup?token=153716-4djEyj4e6JZVou&LNG_ID=3&event_id=' . $_POST['id'];

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
    }
}
