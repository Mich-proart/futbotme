<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// modelos
use App\Models\Torneo;

class AdminTorneosController extends Controller
{
    // post de tipos de ligas por seleccion de tipo competicion
    public function indexCompeticionesTorneos(Request $request){
        // Obtener la variable enviada por el front
        $data = $request->all()['formData']; 
        $tipo_competicion = $data['tipoCompeticion'];
        $valor_categoria = $data['valorCat'];

        // $resultados = Torneo::select('temporada.id', 'torneo.nombre', 'torneo.pais_id', 'torneo.comunidad_id', 'torneo.apuestaMA', 'pais.nombre as nombrePais', 'torneo.categoria_torneo_id', 'torneo.apifutbol_tipo', 'comunidad.nombre as nombreComunidad', 'eliminatorio.fase_activa', 'fase.tipo_eliminatoria')
        // ->join('temporada', 'temporada.torneo_id', '=', 'torneo.id')
        // ->join('pais', 'pais.id', '=', 'torneo.pais_id')
        // ->join('comunidad', 'comunidad.id', '=', 'torneo.comunidad_id')
        // ->join('eliminatorio', 'eliminatorio.id', '=', 'torneo.id')
        // ->join('fase', 'fase.id', '=', 'eliminatorio.fase_activa')
        // ->join('partido', 'temporada.id', '=', 'partido.temporada_id')
        // ->where('torneo.tipo_torneo', $tipo_competicion)
        // ->where('torneo.visible', '>', 3)
        // ->where('torneo.categoria_torneo_id', $valor_categoria)
        // ->distinct()
        // ->orderBy('torneo.categoria_torneo_id')
        // ->orderBy('torneo.comunidad_id')
        // ->orderBy('torneo.orden')
        // ->get();

        $resultados = Torneo::select('temporada.id', 'torneo.nombre', 'torneo.pais_id', 'torneo.comunidad_id', 'torneo.apuestaMA', 'pais.nombre as nombrePais', 'torneo.categoria_torneo_id', 'torneo.apifutbol_tipo', 'comunidad.nombre as nombreComunidad', 'eliminatorio.fase_activa', 'fase.tipo_eliminatoria')
        ->join('temporada', 'temporada.torneo_id', '=', 'torneo.id')
        ->join('pais', 'pais.id', '=', 'torneo.pais_id')
        ->join('comunidad', 'comunidad.id', '=', 'torneo.comunidad_id')
        ->join('eliminatorio', 'eliminatorio.id', '=', 'torneo.id')
        ->join('fase', 'fase.id', '=', 'eliminatorio.fase_activa')
        ->where('torneo.tipo_torneo', $tipo_competicion)
        ->where('torneo.visible', '<', 5)
        ->where('torneo.categoria_torneo_id', $valor_categoria)
        ->orderBy('torneo.apuestaMA', 'desc')
        ->orderBy('torneo.categoria_torneo_id')
        ->orderBy('torneo.orden')
        ->get();


        var_dump($resultados);
    }
    // index
    public function indexTorneos(){

        // $resultados = Torneo::select('temporada.id', 'torneo.nombre', 'torneo.pais_id', 'torneo.comunidad_id', 'torneo.apuestaMA', 'pais.nombre as nombrePais', 'torneo.categoria_torneo_id', 'torneo.apifutbol_tipo', 'comunidad.nombre as nombreComunidad', 'eliminatorio.fase_activa', 'fase.tipo_eliminatoria')
        // ->join('temporada', 'temporada.torneo_id', '=', 'torneo.id')
        // ->join('pais', 'pais.id', '=', 'torneo.pais_id')
        // ->join('comunidad', 'comunidad.id', '=', 'torneo.comunidad_id')
        // ->join('eliminatorio', 'eliminatorio.id', '=', 'torneo.id')
        // ->join('fase', 'fase.id', '=', 'eliminatorio.fase_activa')
        // ->join('partido', 'temporada.id', '=', 'partido.temporada_id')
        // ->where('torneo.tipo_torneo', 2)
        // ->where('torneo.visible', '>', 3)
        // ->where('torneo.categoria_torneo_id', 1)
        // ->distinct()
        // ->orderBy('torneo.categoria_torneo_id')
        // ->orderBy('torneo.comunidad_id')
        // ->orderBy('torneo.orden')
        // ->get();

        $resultados = '';

        return view('admin.torneo')->with('resultados', $resultados);
    }
}

// SELECT te.id, tor.nombre, tor.pais_id, tor.comunidad_id, tor.apuestaMA, pa.nombre nombrePais, tor.categoria_torneo_id, tor.apifutbol_tipo, co.nombre nombreComunidad , eli.fase_activa, fa.tipo_eliminatoria FROM torneo tor 
// INNER JOIN temporada te ON te.torneo_id=tor.id 
// INNER JOIN pais pa ON pa.id=tor.pais_id 
// INNER JOIN comunidad co ON co.id=tor.comunidad_id 
// INNER JOIN eliminatorio eli ON eli.id=tor.id 
// INNER JOIN fase fa ON fa.id=eli.fase_activa 
// WHERE tor.tipo_torneo=2 AND tor.visible<5 
// AND tor.categoria_torneo_id=1 ORDER BY tor.apuestaMA DESC, tor.categoria_torneo_id, tor.orden

// SELECT te.id, tor.nombre, tor.pais_id, tor.comunidad_id, tor.apuestaMA, pa.nombre nombrePais, tor.categoria_torneo_id, tor.apifutbol_tipo, co.nombre nombreComunidad , eli.fase_activa, fa.tipo_eliminatoria FROM torneo tor 
// INNER JOIN temporada te ON te.torneo_id=tor.id 
// INNER JOIN pais pa ON pa.id=tor.pais_id 
// INNER JOIN comunidad co ON co.id=tor.comunidad_id 
// INNER JOIN eliminatorio eli ON eli.id=tor.id 
// INNER JOIN fase fa ON fa.id=eli.fase_activa 
// WHERE tor.tipo_torneo=2 AND tor.visible<5 
// AND tor.categoria_torneo_id=2 ORDER BY tor.apuestaMA DESC, tor.categoria_torneo_id, tor.orden

// SELECT te.id, tor.nombre, tor.pais_id, tor.comunidad_id, tor.apuestaMA, pa.nombre nombrePais, tor.categoria_torneo_id, tor.apifutbol_tipo, co.nombre nombreComunidad , eli.fase_activa, fa.tipo_eliminatoria FROM torneo tor 
// INNER JOIN temporada te ON te.torneo_id=tor.id 
// INNER JOIN pais pa ON pa.id=tor.pais_id 
// INNER JOIN comunidad co ON co.id=tor.comunidad_id 
// INNER JOIN eliminatorio eli ON eli.id=tor.id 
// INNER JOIN fase fa ON fa.id=eli.fase_activa 
// WHERE tor.tipo_torneo=2 AND tor.visible<5 
// AND tor.categoria_torneo_id=3 ORDER BY tor.apuestaMA DESC, tor.categoria_torneo_id, tor.orden

// SELECT te.id, tor.nombre, tor.pais_id, tor.comunidad_id, tor.apuestaMA, pa.nombre nombrePais, tor.categoria_torneo_id, tor.apifutbol_tipo, co.nombre nombreComunidad , eli.fase_activa, fa.tipo_eliminatoria FROM torneo tor 
// INNER JOIN temporada te ON te.torneo_id=tor.id 
// INNER JOIN pais pa ON pa.id=tor.pais_id 
// INNER JOIN comunidad co ON co.id=tor.comunidad_id 
// INNER JOIN eliminatorio eli ON eli.id=tor.id 
// INNER JOIN fase fa ON fa.id=eli.fase_activa 
// WHERE tor.tipo_torneo=2 AND tor.visible<5 
// AND tor.categoria_torneo_id=4 ORDER BY tor.apuestaMA DESC, tor.categoria_torneo_id, tor.orden

// SELECT te.id, tor.nombre, tor.pais_id, tor.comunidad_id, tor.apuestaMA, pa.nombre nombrePais, tor.categoria_torneo_id, tor.apifutbol_tipo, co.nombre nombreComunidad , eli.fase_activa, fa.tipo_eliminatoria FROM torneo tor 
// INNER JOIN temporada te ON te.torneo_id=tor.id 
// INNER JOIN pais pa ON pa.id=tor.pais_id 
// INNER JOIN comunidad co ON co.id=tor.comunidad_id 
// INNER JOIN eliminatorio eli ON eli.id=tor.id 
// INNER JOIN fase fa ON fa.id=eli.fase_activa 
// WHERE tor.tipo_torneo=2 AND tor.visible<5 AND tor.categoria_torneo_id=5 ORDER BY tor.apuestaMA DESC, tor.categoria_torneo_id, tor.orden

// SELECT te.id, tor.nombre, tor.pais_id, tor.comunidad_id, tor.apuestaMA, pa.nombre nombrePais, tor.categoria_torneo_id, tor.apifutbol_tipo, co.nombre nombreComunidad , eli.fase_activa, fa.tipo_eliminatoria FROM torneo tor 
// INNER JOIN temporada te ON te.torneo_id=tor.id 
// INNER JOIN pais pa ON pa.id=tor.pais_id 
// INNER JOIN comunidad co ON co.id=tor.comunidad_id 
// INNER JOIN eliminatorio eli ON eli.id=tor.id 
// INNER JOIN fase fa ON fa.id=eli.fase_activa 
// WHERE tor.tipo_torneo=2 AND tor.visible<5 AND tor.categoria_torneo_id=7 ORDER BY tor.apuestaMA DESC, tor.categoria_torneo_id, tor.orden

// SELECT te.id, tor.nombre, tor.pais_id, tor.comunidad_id, tor.apuestaMA, pa.nombre nombrePais, tor.categoria_torneo_id, tor.apifutbol_tipo, co.nombre nombreComunidad , eli.fase_activa, fa.tipo_eliminatoria FROM torneo tor 
// INNER JOIN temporada te ON te.torneo_id=tor.id 
// INNER JOIN pais pa ON pa.id=tor.pais_id 
// INNER JOIN comunidad co ON co.id=tor.comunidad_id 
// INNER JOIN eliminatorio eli ON eli.id=tor.id 
// INNER JOIN fase fa ON fa.id=eli.fase_activa 
// WHERE tor.tipo_torneo=2 AND tor.visible<5 
// AND tor.categoria_torneo_id=9 ORDER BY tor.apuestaMA DESC, tor.categoria_torneo_id, tor.orden"


//REAL  PARA TORNEOS
//SELECT te.id, tor.nombre, tor.pais_id, tor.comunidad_id, tor.apuestaMA, pa.nombre nombrePais, tor.categoria_torneo_id, tor.apifutbol_tipo, co.nombre nombreComunidad, tor.betsapi , eli.fase_activa, fa.tipo_eliminatoria FROM torneo tor INNER JOIN temporada te ON te.torneo_id=tor.id INNER JOIN pais pa ON pa.id=tor.pais_id INNER JOIN comunidad co ON co.id=tor.comunidad_id INNER JOIN eliminatorio eli ON eli.id=tor.id INNER JOIN fase fa ON fa.id=eli.fase_activa WHERE tor.tipo_torneo=2 AND tor.visible>3 AND tor.categoria_torneo_id=5 ORDER BY tor.apuestaMA DESC, tor.categoria_torneo_id, tor.comunidad_id, tor.orden" string(9) "---------" 
//SELECT te.id, tor.nombre, tor.pais_id, tor.comunidad_id, tor.apuestaMA, pa.nombre nombrePais, tor.categoria_torneo_id, tor.apifutbol_tipo, co.nombre nombreComunidad , eli.fase_activa, fa.tipo_eliminatoria FROM torneo tor INNER JOIN temporada te ON te.torneo_id=tor.id INNER JOIN pais pa ON pa.id=tor.pais_id INNER JOIN comunidad co ON co.id=tor.comunidad_id INNER JOIN eliminatorio eli ON eli.id=tor.id INNER JOIN fase fa ON fa.id=eli.fase_activa WHERE tor.tipo_torneo=2 AND tor.visible<5 AND tor.categoria_torneo_id=5 ORDER BY tor.apuestaMA DESC, tor.categoria_torneo_id, tor.orden"