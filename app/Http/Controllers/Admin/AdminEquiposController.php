<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//imports
use App\Http\Controllers\Admin\AdminJugadoresController;

class AdminEquiposController extends Controller
{
    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/

    // obtenemos todas las equipaciones en la tabla
    public static function getAllEquipaciones(){
        $equipaciones = DB::table('equipacion')
        ->select('*')
        ->get();
        return $equipaciones;
    }

    // equipos que pertenecen a club especifico
    public static function equiposPorClub($idClub){
        $equipos = DB::table('equipo')
        ->select('*')
        ->where('club_id', '=', $idClub)
        ->get();
        return $equipos;
    }

    // categoria de equipo
    public static function datacategoriaEquipo($idEquipo){
        $datosCategoria = DB::table('categoria')
        ->select('*')
        ->where('id', '=', $idEquipo)
        ->get();
        return $datosCategoria;
    }

    // obtenemos todos los datos de un equipo
    public static function getDataEquipo($idEquipo){
        $dataEquipo = DB::table('equipo')
        ->select('*')
        ->where('id', '=', $idEquipo)
        ->get();
        return $dataEquipo;
    }

    // obtener estadios por medio del id de localidad
    public static function getDataEstadiosForLocalidad($idLocalidad){
        $dataEquipos = DB::table('estadio')
        ->select('*')
        ->where('localidad_id', '=', $idLocalidad)
        ->get();
        return $dataEquipos;
    }

    // obtenemos las temporadas en las que juega un equipo por medio de id equipo
    public static function getDataTemporadasEquipo($idEquipo){
        $temporadas = DB::table('temporada_equipo as te')
        ->leftJoin('temporada as t', 't.id', '=', 'te.temporada_id')
        ->select(
            'te.temporada_id',
            't.nombre',
            DB::raw('(SELECT tipo_torneo FROM torneo WHERE id = t.torneo_id) as tipo_torneo')
        )
        ->where('te.equipo_id', $idEquipo)
        ->get();

        return $temporadas;
    }

    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/

    // index para datos de equipo
    public function editarEquipo($idEquipo){
        $dataEquipo = Self::getDataEquipo($idEquipo);
        $dataClubLocalidad = AdminClubesController::getDataClub($dataEquipo[0]->club_id)[0]->localidad_id;
        $dataEstadios = Self::getDataEstadiosForLocalidad($dataClubLocalidad);
        $dataEquipaciones = Self::getAllEquipaciones();
        $dataTemporadas = Self::getDataTemporadasEquipo($idEquipo);
        $dataPlantillaEquipo = AdminJugadoresController::getPlantillaForEquipo($idEquipo);

        return view('admin.editarEquipo', 
        [
            'dataEquipo' => $dataEquipo,
            'dataEstadios' => $dataEstadios,
            'dataEquipaciones' => $dataEquipaciones,
            'dataTemporadas' => $dataTemporadas,
            'dataPlantillaEquipo' => $dataPlantillaEquipo
        ]);
    }
}
