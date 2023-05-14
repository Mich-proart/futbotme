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
        
        $users = DB::table('jugador')
            ->select(DB::raw('*'))
            ->where('nombre', 'LIKE', '%'.$data.'%')            
            ->get();

        $teams = DB::table('equipo')
            ->select(DB::raw('*'))
            ->where('nombre', 'LIKE', '%'.$data.'%')            
            ->get();
        
        // Retornar la respuesta (en formato JSON)
        return response()->json(['jugadores' => $users, 'equipos' => $teams]);        
    }
}
