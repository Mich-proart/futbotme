<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


//alineacion https://api.b365api.com/v1/event/lineup?token=153716-4djEyj4e6JZVou&LNG_ID=3&event_id=5981919

// evento https://api.betsapi.com/v1/event/view?token=153716-4djEyj4e6JZVou&LNG_ID=3&event_id=5981919

// Controlador para el panel de admin
class AdminController extends Controller
{
    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/

    /****** obtenemos los datos de los directos del fichero json y retornamos json de directos *****/
    public static function obtener_directos_de_json(){
        // Lee el contenido del archivo JSON
        $ruta = base_path('directos.json'); // Ruta al archivo JSON
        $contenido = file_get_contents($ruta);
    
        // Decodifica el JSON
        $datos = json_decode($contenido, true);

        // obtenemos los results donde esta el array de partidos
        $response = $datos['results'];
    
        // Retorna el array de datos como viene de la API
        return $response;
    }

    /****** directos agrupados por id de competicion ******/
    public static function obtener_directos_agrupados_competicion(){
        // obtenemos los directos a pelo para ordenarlos
        $response = Self::obtener_directos_de_json();
        $partidosAgrupados = collect($response)->groupBy('league.id')->sortKeys();

        // retornamos los directos agrupados por competicion
        return $partidosAgrupados;
    }

    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/

    // enviamos la vista y los datos de los directos que vienen del fichero json
    public function index(){
        // obtenemos el valor de la funcion de la misma clase
        $response = $this->obtener_directos_de_json();

        return view('admin.index')->with('datos', $response);
    }

    // funcion con la que mostraremos el calendario de dia a dia de los tipos de torneos y cantidad de partidos
    public function indexAgenda(){
        return view('admin.agenda');
    }

    // function para obtener todas las federaciones de todas las comunidades 
    public function indexFederaciones(){
        return view('admin.federacion');
    }

    // function para obtener todos los jugadores de la base de datos
    public function indexJugadores(){
        return view('admin.jugador');
    }

    // funcion con la cual generamos el menu 
    public function indexCrearMenu(){
        return view('admin.crearMenu');
    }
}