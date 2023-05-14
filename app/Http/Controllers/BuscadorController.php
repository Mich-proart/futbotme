<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class BuscadorController extends Controller{
    
    public function buscador(Request $request){ 

        // Obtener la variable ingresada en el input
        $data = $request->all()['formData'];   
        
        // Array para almacenar Jugador y Equipo
        $arrayJugadorEquipo = array();
        
        $users = DB::table('jugador')
            ->select(DB::raw('nombre'))
            ->where('nombre', 'LIKE', '%'.$data.'%')            
            ->get();

        $objJugadores = [
            'llave' => 'jugadores',
            'valor' => $users
        ];
    
        array_push($arrayJugadorEquipo, $objJugadores);

        $teams = DB::table('equipo')
            ->select(DB::raw('nombre'))
            ->where('nombre', 'LIKE', '%'.$data.'%')            
            ->get();
        
        $objEquipos = [
            'llave' => 'equipos',
            'valor' => $teams
        ];

        array_push($arrayJugadorEquipo, $objEquipos);

        // Retornar la respuesta (en formato JSON)
        return response()->json(['message' => $arrayJugadorEquipo]);
    }
}
