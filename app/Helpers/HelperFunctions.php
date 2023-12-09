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

    // enviamos la fecha, mes y año current en un objeto
    public static function get_fecha_current_generic_object(){
        $fechaActual = Carbon::now();
        $fechaObject = [
            'dia' => $fechaActual->day,
            'mes' => $fechaActual->month,
            'anho' => $fechaActual->year
        ];
        return $fechaObject;
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

    // aqui enviamos array de meses en español
    public static function get_array_meses(){
        $meses = [
            1 => 'Enero',
            2 => 'Febrero',
            3 => 'Marzo',
            4 => 'Abril',
            5 => 'Mayo',
            6 => 'Junio',
            7 => 'Julio',
            8 => 'Agosto',
            9 => 'Septiembre',
            10 => 'Octubre',
            11 => 'Noviembre',
            12 => 'Diciembre',
        ];
        
        return $meses;
    }

    public static function get_estados_partidos(){
        $estados = [
            0 => 'No jugado',
            1 => 'FINAL',
            3 => 'Suspendido',
            4 => 'Aplazado',
            5 => 'Anulado',
        ];
        return $estados;
    }
    public static function get_estados_partidos_directos(){

        $estados = [
            0 => 'No jugado',
            1 => 'FINAL',
            2 => 'En juego',
            3 => 'Suspendido',
            4 => 'Aplazado',
            5 => 'Anulado',
            6 => 'Descanso',
            7 => 'Penaltis',
            8 => 'Prórroga',
            9 => 'Prór. 1T',
            10 => 'Prór. 2T',
            11 => 'Desc.Prór.',
        ];
        return $estados;
    }
}