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
        $dataJugador = DB::table('jugador')
        ->select('*')
        ->where('id', '=', $id)
        ->orderBy('nombre')
        ->get();

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