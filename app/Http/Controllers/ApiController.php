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

        // Realizar la solicitud a la API externa
        //$response = Http::get('https://api.b365api.com/v3/events/inplay?sport_id=1&token=153716-4djEyj4e6JZVou');

        $datos = file_get_contents(base_path()."/resources/views/components/inplay.json");

        // Obtener los datos de la respuesta
        //$datos = $response->json();

        // Devolver los datos como respuesta
        //return response()->json($datos);

        //return view('welcome', ['users' => response()->json($datos)]);

        return $datos;
    }
}
