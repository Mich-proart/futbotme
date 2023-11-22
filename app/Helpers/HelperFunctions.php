<?php

namespace App\Helpers;

use App\Models\OtraTabla;
use Carbon\Carbon;
class HelperFunctions
{
    // aqui generamos la obtencion de fecha estandar para ocuparla en todo el panel
    public static function get_fecha_current_generic(){
        $fechaActual = Carbon::now();
        $fechaActual = $fechaActual->year.'-'.$fechaActual->month.'-'.$fechaActual->day;
        return $fechaActual;
    }

    // aqui convertimos el timer de la api a momento fecha y hora
    public static function get_fecha_format_second($segundos){
        $zonaHoraria = 'Europe/Madrid';
        \Carbon\Carbon::setToStringFormat('Y-m-d H:i:s');
        $fechaHora = \Carbon\Carbon::createFromTimestamp($segundos, $zonaHoraria);
        $fechaFormateada = $fechaHora->format('Y-m-d'); // Formato: Año-Mes-Día 
        $horaFormateada = $fechaHora->format('H:i:s'); // Formato: Hora:Minutos:Segundos
        $objResponse = [
            'fechaFormat' => $fechaFormateada,
            'horaFormat' => $horaFormateada
        ];
        return $objResponse; 
    }


    public static function obtenerDatosOtraTabla($id){
        return "valor del Helper";
    }
    public static function categoriaClub($id){
        return "valor categoria";
    }
}