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

    // obtenemos los datos de los directos del fichero json y retornamos json de directos 
    public function obtener_directos_de_json(){
        // Lee el contenido del archivo JSON
        $ruta = base_path('directos.json'); // Ruta al archivo JSON
        $contenido = file_get_contents($ruta);
    
        // Decodifica el JSON
        $datos = json_decode($contenido, true);
    
        // Retorna los datos en formato JSON
        return response()->json($datos);
    }

    // enviamos la vista y los datos de los directos que vienen del fichero json
    public function index(){
        // obtenemos el valor de la funcion de la misma clase
        $response = $this->obtener_directos_de_json();

        // almacenamos el valor de los results
        $datos = $response->original['results'];
        return view('admin.index')->with('datos', $datos);
    }

    // funcion para ejecutar los directos directamente de la api y machacar valores en la DB
    public function indexTorneos(){
        return view('admin.torneo');
    }

    // funcion con la que mostraremos el calendario de dia a dia de los tipos de torneos y cantidad de partidos
    public function indexAgenda(){
        return view('admin.agenda');
    }

    // function para obtener todas las federaciones de todas las comunidades 
    public function indexFederaciones(){
        return view('admin.federacion');
    }

    // function para obtener todos los clubes de comunidades
    public function indexClubes(){
        $clubes = DB::table('club')
        //->join('pais', 'club.pais_id', '=', 'pais.id')
        //->select(DB::raw('club.nombre','club.localidad_id','club.pais_id','club.id','club.web','club.codigoRFEF','pais.nombre'))
        ->select('*')
        ->limit(10)


        // $users = DB::table('jugador')
        //     ->join('equipo', 'jugador.equipoActual_id', '=', 'equipo.id')
        //     ->select(DB::raw('jugador.id AS idJugador, jugador.nombre AS nombreJugador, jugador.apellidos AS apellidosJugador, jugador.apodo AS apodoJugador, jugador.sexo AS sexoJugador, jugador.fecha_nacimiento AS fecha_nacimiento_Jugador, jugador.lugar_nacimiento AS lugar_nacimiento_Jugador, jugador.altura AS alturaJugador, jugador.peso AS pesoJugador, jugador.dorsal AS dorsalJugador, jugador.es_fichaje AS es_fichaje_Jugador, jugador.es_baja AS es_baja_Jugador, jugador.posicion AS posicionJugador, equipo.nombre AS nombreEquipo'))
        //     ->where('jugador.nombre', 'LIKE', '%'.$data.'%')            
        //     ->get();




        ->get();
        return view('admin.club', ['clubes' => $clubes]);
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

// nota ligas y torneos desde la tabla torneos difereciando uno liga dos torneo 
// nota directos si limite de categoria o liga o torneo agrupados por tipo de competicion 
// ej. uefa, champins leage

