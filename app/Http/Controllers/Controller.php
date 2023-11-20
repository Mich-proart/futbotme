<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

// importamos funciones externas
use Carbon\Carbon;
use App\Http\Controllers\Admin\AdminController;

class Controller extends BaseController{
    
    public function index(){

        // importamos los directos modificados y ordenados por competicion order by ASC
        $fechaActual = Carbon::now();
        $fechaActual = $fechaActual->year.'-'.$fechaActual->month.'-'.$fechaActual->day;
        $fechaActual = '2023-10-31';
        $directosFhicheroJson = AdminController::obtener_directos_agrupados_competicion();
        $partidosPorJugarCurDate = AdminController::get_partidos_curtdate(0,$fechaActual);
        $partidosEnJuegoCurDate = AdminController::get_partidos_curtdate(2,$fechaActual);
        $partidosTerminadosCurDate = AdminController::get_partidos_curtdate(1,$fechaActual);

        // retornamos los datos de directo DB, finalizados DB, por Jugar DB
        return view('welcome', [
            'directos' => $directosFhicheroJson,
            'partidosPorJugarCurDate'=>$partidosPorJugarCurDate,
            'partidosEnJuegoCurDate'=>$partidosEnJuegoCurDate,
            'partidosTerminadosCurDate'=>$partidosTerminadosCurDate
        ]);
    }

    public function indexCategorias($nombre){

        return view('categories',['nombre' => $nombre]);
    }

    public function indexCategoriasAscenso($nacional){

        return view('ascensosydecensos',['nombre' => $nacional]);
    }
}
