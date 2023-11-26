<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//imports
use App\Models\Partido;
use App\Helpers\HelperFunctions;

class AdminAgendaController extends Controller
{
    // funcion con la que mostraremos el calendario de dia a dia de los tipos de torneos y cantidad de partidos
    public function indexAgenda($mes,$anio){
        $partidos = Partido::selectRaw('COUNT(partido.id) as partidos, tor.categoria_torneo_id as categoria_torneo_id, ct.nombre, partido.fecha')
        ->join('temporada as te', 'te.id', '=', 'partido.temporada_id')
        ->join('torneo as tor', 'tor.id', '=', 'te.torneo_id')
        ->join('categoriatorneo as ct', 'ct.id', '=', 'tor.categoria_torneo_id')
        ->where('tor.visible', '>', 4)
        ->where('tor.visible', '<', 70)
        ->whereMonth('partido.fecha', $mes) // Mes 11 para noviembre
        ->whereYear('partido.fecha', $anio) // Año 2023
        ->groupBy('partido.fecha', 'tor.categoria_torneo_id', 'ct.nombre') // Añadido 'ct.nombre' al GROUP BY
        ->orderBy('partido.fecha')
        ->orderBy('ct.orden')
        ->get();

        // Obtener el año y mes actual // dia solo para uso por si se desea usar
        $diaActual = HelperFunctions::get_fecha_current_generic_object()['dia'];
        $mesDefinido = HelperFunctions::get_fecha_current_generic_object()['mes'];
        $anioDefinido = HelperFunctions::get_fecha_current_generic_object()['anho'];
        $mesActual = $mes;
        $anioActual = $anio;

        $meses = HelperFunctions::get_array_meses();

        // Crear una matriz para almacenar el calendario
        $calendario = [];

        // Obtener el primer y último día del mes
        $primerDia = date('N', strtotime("$anioActual-$mesActual-01"));
        $ultimoDia = date('t', strtotime("$anioActual-$mesActual-01"));

        // Inicializar contador para recorrer los días
        $contador = 1;

        // Generar la estructura del calendario
        for ($i = 1; $i <= 6; $i++) {
            $semana = [];
            for ($j = 1; $j <= 7; $j++) {
                if ($primerDia > 1) {
                    $semana[] = [
                        'numero' => '',
                        'fecha' => '',
                        'clase' => '',
                    ];
                    $primerDia--;
                } elseif ($contador <= $ultimoDia) {
                    $fecha = sprintf("%d-%02d-%02d", $anioActual, $mesActual, $contador);
                    $clase = ($contador == $diaActual && $mesActual == $mesDefinido && $anioDefinido == $anioActual) ? 'dia-actual' : '';
                    $semana[] = [
                        'numero' => $contador,
                        'fecha' => $fecha,
                        'clase' => $clase,
                    ];
                    $contador++;
                } else {
                    $semana[] = [
                        'numero' => '',
                        'fecha' => '',
                        'clase' => '',
                    ];
                }
            }
            $calendario[] = $semana;
        }

        // Reestructurar los resultados
        $partidosAgrupados = $partidos->groupBy('fecha');
        return view('admin.agenda')->with([
            'meses' => $meses,
            'calendario' => $calendario,
            'datosArray' => $partidosAgrupados,
            'mesActual' => $mesActual,
            'anioActual' => $anioActual,
        ]);
    }

    // funcion con la que generamos la lista por categoria y fecha dia a dia por categoria
    public function listadoAgenda($categoria,$fecha){
        // Obtener el año y mes actual // dia solo para uso por si se desea usar
        // $diaActual = HelperFunctions::get_fecha_current_generic_object()['dia'];
        // $mesActual = $mes;
        // $anioActual = $anio;
        $partidos = Partido::select(
            'partido.id',
            'partido.estado_partido',
            'partido.fase_id',
            'partido.partidoAPI',
            'partido.temporada_id',
            'partido.equipoLocal_id',
            'partido.equipoVisitante_id',
            'partido.hora_real',
            'partido.observaciones',
            'partido.goles_local',
            'partido.goles_visitante',
            'partido.fecha',
            'partido.comentario',
            'partido.betsapi',
            'partido.hora_prevista',
            'ec.nombre as localCorto',
            'ef.nombre as visitanteCorto',
            'partido.jornada',
            'ec.slug as tl',
            'ef.slug as tv',
            'te.nombre as temporada_nombre',
            'tor.apifutbol',
            'tor.apiRFEFcompeticion',
            'tor.apiRFEFgrupo',
            'tor.comunidad_id'
        )
        ->join('equipo as ec', 'ec.id', '=', 'partido.equipoLocal_id')
        ->join('equipo as ef', 'ef.id', '=', 'partido.equipoVisitante_id')
        ->join('temporada as te', 'te.id', '=', 'partido.temporada_id')
        ->join('torneo as tor', 'tor.id', '=', 'te.torneo_id')
        ->where('partido.fecha', '=', $fecha)
        ->where('tor.visible', '>', 4)
        ->where('tor.categoria_torneo_id', '=', $categoria)
        ->orderBy('partido.hora_prevista')
        ->orderBy('tor.orden')
        ->get();
        return view('admin.agendaLista')->with([
            'partidos' => $partidos,
            'diaActual' => $fecha,
        ]);
    }
}
