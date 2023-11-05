<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//imports
use App\Http\Controllers\Admin\AdminEquiposController;

class AdminClubesController extends Controller
{
    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/
    // funcion para obtener los paises y devolverlos
    public static function getAllPaises(){
        $paises = DB::table('pais')
        ->select('nombre', 'id')
        ->orderBy('nombre')
        ->get();
        return $paises;
    }

    // funcion para obtener todas las localidades
    public static function getAllLocalidades(){
        $localidades = DB::table('localidad')
        ->select('nombre', 'id')
        ->orderBy('pais_id')
        ->get();
        return $localidades;
    }

    // obtenemos los datos de una localidad por medio de id
    public static function getLocalidad($id){
        $dataLocalidad = DB::table('localidad')
        ->select('*')
        ->where('id', '=', $id)
        ->get();
        return $dataLocalidad;
    }

    // obtenemos todos los datos de un club
    public static function getDataClub($id){
        $dataClub = DB::table('club')
        ->select('*')
        ->where('id', '=', $id)
        ->get();
        return $dataClub;
    }
    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/

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
        
        $paises = Self::getAllPaises();

        return view('admin.club', ['paises' => $paises]);
    }

    public function editarClub($idClub){
        $dataClub = Self::getDataClub($idClub);
        $localidades = Self::getAllLocalidades();
        $equipos = AdminEquiposController::equiposPorClub($idClub);
        $arrayEquiposClub = [];
        foreach ($equipos as $key => $value) {
            $objEquipo = [
                'nombreEquipo' => $value->nombre,
                'idEquipo' => $value->id,
                'slugEquipo' => $value->slug,
                'idCategoriaEquipo' => AdminEquiposController::datacategoriaEquipo($value->categoria_id)[0]->id,
                'nombreCategoriaEquipo' => AdminEquiposController::datacategoriaEquipo($value->categoria_id)[0]->nombre,
            ];
            array_push($arrayEquiposClub, $objEquipo);
        }
        return view('admin.editarClub', [
            'dataClub' => $dataClub,
            'localidades' => $localidades,
            'equipos' => $arrayEquiposClub
        ]);
    }
}
