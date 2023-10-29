<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminJugadoresController extends Controller
{
    // functio con la que obtenemos los jugadores
    public static function getJugadores(){
        
    
    }
    // function para obtener todos los jugadores de la base de datos
    public function indexJugadores(){
        return view('admin.jugador');
    }
}