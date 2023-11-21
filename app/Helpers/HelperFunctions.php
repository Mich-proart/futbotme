<?php

namespace App\Helpers;

use App\Models\OtraTabla;
use Carbon\Carbon;
class HelperFunctions
{
    public static function get_fecha_current_generic(){
        $fechaActual = Carbon::now();
        $fechaActual = $fechaActual->year.'-'.$fechaActual->month.'-'.$fechaActual->day;
        //$fechaActual = '2023-10-31';
        return $fechaActual;
    }
    public static function obtenerDatosOtraTabla($id)
    {
        //return OtraTabla::find($id);

        return "valor del Helper";
    }

    // Otras funciones auxiliares aquí


    public static function categoriaClub($id){

        return "valor categoria";
        // $categoria = DB::table('categoria')
        // ->select(DB::raw('nombre'))
        // ->where('id', '=', $id)            
        // ->get();

        // return $categoria;

    }
}