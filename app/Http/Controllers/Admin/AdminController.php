<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




// Controlador para el panel de admin
class AdminController extends Controller
{
    // esta funcion solo envia la vista de la home 
    public function  index(){
        return view('admin.index');
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

    // funcion solo para tener todo el tema de la vista
    public function  test(){
        return view('admin.example');
    }
}
