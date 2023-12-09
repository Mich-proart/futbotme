<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//importaciones
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminEquiposController;
use App\Helpers\HelperFunctions;

class AdminPartidoLigaTorneoController extends Controller
{
    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/
    public static function get_medios(){
        $medios = DB::table('medio')
        ->select('*')
        ->get();
        return $medios;
    }
    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/
    public function editarPartidoLigaTorneo($idPartido){

        $datosPartido = AdminController::get_datos_partido_db($idPartido);
        $medioPartido = AdminController::get_medio_partido_in_db($idPartido);
        $dataEquipoLocal = AdminEquiposController::getDataEquipo($datosPartido[0]->equipoLocal_id);
        $dataEquipoVisitante = AdminEquiposController::getDataEquipo($datosPartido[0]->equipoVisitante_id);
        $medios = $this->get_medios();

        return view('admin.editarPartido')->with(
            [
                'datosPartido' => $datosPartido,
                'dataEquipoLocal' => $dataEquipoLocal,
                'dataEquipoVisitante' => $dataEquipoVisitante,
                'medios' => $medios,
                'medioPartido' => $medioPartido
            ]
        );
    }
}