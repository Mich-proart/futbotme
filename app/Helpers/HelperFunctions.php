<?php

namespace App\Helpers;

use App\Models\OtraTabla;

class HelperFunctions
{
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