<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//imports
use App\Http\Controllers\Admin\AdminClubesController;

class AdminJugadoresController extends Controller
{
    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/
    // function con la que obtenemos los jugadores
    public static function getJugadores(){
        // consulta obtener clubes
        $jugadores = DB::table('jugador')
        ->select('*')
        ->orderBy('nombre')
        ->get();
        return $jugadores;
    }

    // funcion con la que obtenemos todos los datos de un jugador
    public static function getDataJugador($id){
        $dataJugador = DB::table('jugador')
        ->select('*')
        ->where('id', '=', $id)
        ->orderBy('nombre')
        ->get();
        return $dataJugador;
    }

    // obtenelos los jugadores de un equipo pasando id equipo por parametro
    public static function getPlantillaForEquipo($idEquipo){
        $jugadores = DB::table('jugador as j')
        ->select('j.id', 'j.apodo', 'j.nombre', 'j.apellidos', 'j.posicion', 'j.es_baja')
        ->where('j.equipoActual_id', $idEquipo)
        ->orderBy('j.posicion', 'ASC')
        ->get();
        return $jugadores;
    }

    public static function getCurrentPlayersTeam($idEquipo){
        $jugadores = DB::table('jugador as j')
        ->select('j.id', 'j.apodo', 'j.nombre', 'j.apellidos', 'j.posicion', 'j.equipoActual_id')
        ->where('j.equipoActual_id', $idEquipo)
        ->where('j.es_baja', 0)
        ->orderBy('j.posicion', 'ASC')
        ->get();
        return $jugadores;
    }

    // enviamos jugadores en formato ajax 
    public static function getJugadoresAjax(){
        $jugadores = Self::getJugadores();
        $nuevosDatos = [];
        foreach ($jugadores as $jugador) {
            $nuevosDatos[] = [
                'idJugador' => "$jugador->id",
                'nombre' => $jugador->nombre.' '.$jugador->apellidos,
                'apodo' => $jugador->apodo,
                'posicion' => $jugador->posicion,
                'sexo' => $jugador->sexo,
                'fechaNacimiento' => $jugador->fecha_nacimiento,
                'lugarNacimiento' => $jugador->lugar_nacimiento,
                'equipoActual' => $jugador->equipoActual_id,
                'caracteristicas' => $jugador->caracteristicas,
            ];
        }
        echo json_encode(['data' => $nuevosDatos]);
    }
    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/

    // editamos usuario 
    public static function editarJugador($id){
        
        // obtenemos los datos del jugador seleccionado
        $dataJugador = Self::getDataJugador($id);

        // importamos funcion con la que obtenemos los paises
        $paises = AdminClubesController::getAllPaises();
        return view('admin.editarJugador', ['dataJugador' => $dataJugador, 'paises' => $paises]);
    }

    // function para obtener todos los jugadores de la base de datos
    public function indexJugadores(){
        $jugadores = '';
        return view('admin.jugador', ['jugadores' => $jugadores]);
    }
}