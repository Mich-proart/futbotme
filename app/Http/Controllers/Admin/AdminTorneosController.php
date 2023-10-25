<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// modelos
use App\Models\Torneo;

class AdminTorneosController extends Controller
{
    // index
    public function indexTorneos(){

        $resultados = Torneo::select('temporada.id', 'torneo.nombre', 'torneo.pais_id', 'torneo.comunidad_id', 'torneo.apuestaMA', 'pais.nombre as nombrePais', 'torneo.categoria_torneo_id', 'torneo.apifutbol_tipo', 'comunidad.nombre as nombreComunidad', 'eliminatorio.fase_activa', 'fase.tipo_eliminatoria')
        ->join('temporada', 'temporada.torneo_id', '=', 'torneo.id')
        ->join('pais', 'pais.id', '=', 'torneo.pais_id')
        ->join('comunidad', 'comunidad.id', '=', 'torneo.comunidad_id')
        ->join('eliminatorio', 'eliminatorio.id', '=', 'torneo.id')
        ->join('fase', 'fase.id', '=', 'eliminatorio.fase_activa')
        ->join('partido', 'temporada.id', '=', 'partido.temporada_id')
        ->where('torneo.tipo_torneo', 2)
        ->where('torneo.visible', '>', 3)
        ->where('torneo.categoria_torneo_id', 1)
        ->distinct()
        ->orderBy('torneo.categoria_torneo_id')
        ->orderBy('torneo.comunidad_id')
        ->orderBy('torneo.orden')
        ->get();

        return view('admin.torneo')->with('resultados', $resultados);
    }
}