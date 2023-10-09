<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('admin.club');
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
