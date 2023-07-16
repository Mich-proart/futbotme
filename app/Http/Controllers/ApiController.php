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
    public function obtenerDatosBestApiPartidosDirecto(){
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
    }

    public function obtenerDatosBestApiAlineaciones(Request $request){

        $data = $request->all()['valorId'];  

        $objResponse = array();

        $objResponse = [
            'local' => '',
            'visitante' => ''
        ];

        $response = Http::get('https://api.b365api.com/v1/event/lineup?token=153716-4djEyj4e6JZVou&LNG_ID=3&event_id='.$data);

        if($response->json()['results']){

            $datosLocal = $response->json()['results']['home']['startinglineup'];

            $datosVisitante = $response->json()['results']['away']['startinglineup'];

            $objResponse = [
                'local' => $datosLocal,
                'visitante' => $datosVisitante
            ];         
        }

        return \json_encode($objResponse);
    }
}
