<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Helpers\HelperFunctions;

class FichaJugadorController extends Controller
{

    public function indexJugador($slugJugador, $idJugador){

        $datos = DB::table('jugador')
            ->join('equipo', 'jugador.equipoActual_id', '=', 'equipo.id')
            ->select(DB::raw('jugador.id AS idJugador, jugador.nombre AS nombreJugador, jugador.apellidos AS apellidosJugador, jugador.apodo AS apodoJugador, jugador.sexo AS sexoJugador, jugador.fecha_nacimiento AS fecha_nacimiento_Jugador, jugador.lugar_nacimiento AS lugar_nacimiento_Jugador, jugador.altura AS alturaJugador, jugador.peso AS pesoJugador, jugador.dorsal AS dorsalJugador, jugador.es_fichaje AS es_fichaje_Jugador, jugador.es_baja AS es_baja_Jugador, jugador.posicion AS posicionJugador, equipo.nombre AS nombreEquipo, jugador.palmares AS palmaresJugador'))
            ->where('jugador.id', '=', $idJugador)            
            ->get();

        return view('fichaJugador', ['datos' => $datos, 'id' => $idJugador]);
    }
}
