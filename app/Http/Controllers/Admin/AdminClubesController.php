<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminClubesController extends Controller
{

    // funcion para obtener los paises
    public static function getClubes(Request $request){

        // Obtener la variable enviada por el front
        $data = $request->all()['formData']; 
        $id_pais = $data['idPais'];

        // consulta obtener clubes
        $club = DB::table('club')
        ->select('nombre', 'id')
        ->where('pais_id', '=', $id_pais)
        ->orderBy('nombre')
        ->get();

        echo json_encode($club);
    }
    
    // function para obtener todos los clubes de comunidades
    public function indexPaises(){
        
        $paises = DB::table('pais')
        ->select('nombre', 'id')
        ->orderBy('nombre')
        ->get();

        return view('admin.club', ['paises' => $paises]);
    }
}
