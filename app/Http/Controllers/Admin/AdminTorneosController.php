<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// modelos
use App\Models\Torneo;
use App\Models\Fase;

// importamos funciones externas
use App\Helpers\HelperFunctions;

class AdminTorneosController extends Controller
{
    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/
    public static function fasesForTemporada($idTemporada){
        $fases = DB::select("SELECT
        tor.id, 
        fa.id, 
        fa.nombre, 
        fa.tipo_eliminatoria 
        FROM temporada te 
        INNER JOIN torneo tor ON te.torneo_id=tor.id 
        INNER JOIN eliminatorio_fase elifa ON elifa.eliminatorio_id=tor.id 
        INNER JOIN fase fa ON fa.id=elifa.fase_id WHERE te.id= $idTemporada ORDER BY fa.orden");
        return $fases;
    }

    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/

    // obtenemos los partidos del torneo activo por medio de la variable de parametros
    public function competicionTorneoActiva($temporadaId,$idBetsapi,$faseActiva){

        $fasesTotales = $this->fasesForTemporada($temporadaId);

        $resultado = DB::select("
            SELECT 
            ct.id as categoria_id, ct.orden as categoria_orden, 
            ct.nombre as categoria_nombre, 
            tor.id as torneo_id, 
            tor.orden as torneo_orden, 
            tor.nombre as torneo_nombre, 
            tor.division_id, 
            co.id as comunidad_id, 
            co.nombre as comunidad_nombre, 
            pa.id as pais_id, 
            pa.nombre as pais_nombre,
            p.id as partido_id, 
            p.estado_partido, 
            p.temporada_id, 
            p.fecha, 
            p.arbitro_id, 
            p.hora_prevista, 
            p.hora_real, 
            p.goles_local, 
            p.goles_visitante, 
            p.jornada, 
            p.clasificado, 
            p.observaciones, 
            p.estadio, 
            p.partidoAPI, 
            p.comentario, 
            p.equipoLocal_id, 
            ec.nombre as local, 
            ec.nombreCorto ncLocal, 
            ec.slug twLocal, 
            ec.betsapi betsapiL, 
            (select comunidad_id from provincia where id= (select provincia_id from localidad where id=(select localidad_id from club where id=ec.club_id) ) ) comunidad_local, 
            (select nombre from comunidad where id= (select comunidad_id from provincia where id= (select provincia_id from localidad where id=(select localidad_id from club where id=ec.club_id) ) ) ) comunidad_local_nombre, 
            (select pais_id from club where id=ec.club_id) pais_local, 
            (select nombre from pais where id=(select pais_id from club where id=ec.club_id)) pais_local_nombre, 
            p.equipoVisitante_id, 
            ef.nombre visitante, 
            ef.nombreCorto ncVisitante, 
            ef.slug twVisitante, 
            ef.betsapi betsapiV, 
            (select comunidad_id from provincia where id= (select provincia_id from localidad where id=(select localidad_id from club where id=ef.club_id) ) ) comunidad_visitante,
            (select nombre from comunidad where id= (select comunidad_id from provincia where id= (select provincia_id from localidad where id=(select localidad_id from club where id=ef.club_id) ) ) ) comunidad_visitante_nombre,
            (select pais_id from club where id=ef.club_id) pais_visitante, 
            (select nombre from pais where id=(select pais_id from club where id=ef.club_id)) pais_visitante_nombre, 
            p.usuario_id, 
            (select count(id) from medio where partido_id=p.id) medios, 
            p.youtube_id, p.betsapi 
            FROM partido p 
            INNER JOIN equipo ec ON ec.id=p.equipoLocal_id 
            INNER JOIN equipo ef ON ef.id=p.equipoVisitante_id 
            INNER JOIN temporada te ON te.id=p.temporada_id 
            INNER JOIN torneo tor ON tor.id=te.torneo_id 
            INNER JOIN comunidad co ON co.id=tor.comunidad_id 
            INNER JOIN pais pa ON pa.id=tor.pais_id 
            INNER JOIN categoriatorneo ct ON ct.id=tor.categoria_torneo_id 
            WHERE p.temporada_id=$temporadaId AND p.jornada=$faseActiva
            ORDER BY p.fecha, p.hora_prevista");

        return view('admin.torneoActivo')->with(
            [
                'estadosPartidos' => HelperFunctions::get_estados_partidos(),
                'resultado' => $resultado,
                'idBetsapi' => $idBetsapi,
                'temporadaId' => $temporadaId,
                'fasesTotales' => $fasesTotales,
                'faseActiva' => $faseActiva,
                'urlUpcomingPartido' => HelperFunctions::get_url_upcoming($idBetsapi)
            ]
        );
    }

    // post de tipos de ligas por seleccion de tipo competicion
    public function indexCompeticionesTorneos(Request $request){
        // Obtener la variable enviada por el front
        $data = $request->all()['formData']; 
        $tipo_competicion = $data['tipoCompeticion'];
        $valor_categoria = $data['valorCat'];
        $arrayTorneos = array();
        $torneosAgrupados = [];
        $tabs = '';
        $contadorTabs = 0;

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


        // este  es el anterior fiable
        // $resultados = Torneo::select('temporada.id', 'torneo.nombre', 'torneo.pais_id', 'torneo.comunidad_id', 'torneo.apuestaMA', 'pais.nombre as nombrePais', 'torneo.categoria_torneo_id', 'torneo.apifutbol_tipo', 'comunidad.nombre as nombreComunidad', 'eliminatorio.fase_activa', 'fase.tipo_eliminatoria')
        // ->join('temporada', 'temporada.torneo_id', '=', 'torneo.id')
        // ->join('pais', 'pais.id', '=', 'torneo.pais_id')
        // ->join('comunidad', 'comunidad.id', '=', 'torneo.comunidad_id')
        // ->join('eliminatorio', 'eliminatorio.id', '=', 'torneo.id')
        // ->join('fase', 'fase.id', '=', 'eliminatorio.fase_activa')
        // ->where('torneo.tipo_torneo', $tipo_competicion)
        // ->where('torneo.visible', '<', 5)
        // ->where('torneo.categoria_torneo_id', $valor_categoria)
        // ->orderBy('torneo.apuestaMA', 'desc')
        // ->orderBy('torneo.categoria_torneo_id')
        // ->orderBy('torneo.orden')
        // ->get();

        $consultaCompeticiones = Torneo::select(
            'temporada.id as temporada_id',
            'torneo.nombre',
            'torneo.pais_id',
            'torneo.comunidad_id',
            'torneo.apuestaMA',
            'pais.nombre as nombrePais',
            'torneo.categoria_torneo_id',
            'torneo.apifutbol_tipo',
            'comunidad.nombre as nombreComunidad',
            'torneo.betsapi as torneoIdBetsapi',
            'torneo.tipo_torneo as tipoTorneo',
            'eliminatorio.fase_activa as faseActiva',
            'fase.tipo_eliminatoria as tipoEliminatoria'
        )
        ->join('temporada', 'temporada.torneo_id', '=', 'torneo.id')
        ->join('pais', 'pais.id', '=', 'torneo.pais_id')
        ->join('comunidad', 'comunidad.id', '=', 'torneo.comunidad_id')
        ->join('eliminatorio', 'eliminatorio.id', '=', 'torneo.id')
        ->join('fase', 'fase.id', '=', 'eliminatorio.fase_activa')
        ->where('torneo.tipo_torneo', $tipo_competicion)
        ->where('torneo.visible', '>', 3)
        ->where('torneo.categoria_torneo_id', $valor_categoria)
        ->orderBy('torneo.categoria_torneo_id')
        ->orderBy('torneo.comunidad_id')
        ->orderBy('torneo.orden');

        // where union para hacer dos consultas a la vez
        $consultaCompeticiones = $consultaCompeticiones
            ->where(function($query) {
            $query->where('torneo.visible', '>', 3);
            //->orWhere('torneo.visible', '!=', 0);
            //->orWhere('torneo.visible', '<', 5);
            })
        ->get();

        foreach ($consultaCompeticiones as $key => $value) {
            $obj = [
                'nombreComunidad' => $value['nombreComunidad'],
                'torneosComunidad' => [
                    'nombreCom' => $value['nombre'],
                    'idBetsapi' => $value['betsapi'],
                    'pais' => $value['nombrePais'],
                    'temporadaId' => $value['temporada_id'],
                    'torneoIdBetsapi' => $value['torneoIdBetsapi'],
                    'tipoTorneo' => $value['tipoTorneo'],
                    'faseActiva' => $value['faseActiva'],
                    'tipoEliminatoria' => $value['tipoEliminatoria']
                ]
            ];
            array_push($arrayTorneos, $obj);
        }

        // agrupamos los torneos por comunidad
        foreach ($arrayTorneos as $torneo) {
            $nombreComunidad = $torneo['nombreComunidad'];
            if (!isset($torneosAgrupados[$nombreComunidad])) {
                $torneosAgrupados[$nombreComunidad] = [];
            }
            $torneosAgrupados[$nombreComunidad][] = $torneo['torneosComunidad'];
        }

        // generamos acordion de comunidades por competicion 
        foreach ($torneosAgrupados as $key => $value) {
            $tabs .=
            '<div class="card mb-0">
                <div class="card-header" style="cursor:pointer;" id="headingFour-'.$contadorTabs.'">
                    <h5 class="custom-accordion-title d-block py-1 mb-0" data-bs-toggle="collapse" href="#collapseFour-'.$contadorTabs.'"
                            aria-expanded="false" aria-controls="collapseFour-'.$contadorTabs.'">
                            '.$key.'<i class="mdi mdi-chevron-down accordion-arrow"></i>
                    </h5>
                </div>

                <div id="collapseFour-'.$contadorTabs.'" class="collapse" aria-labelledby="headingFour-'.$contadorTabs.'"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <ul class="list-group list-group-flush listado-torneo-competicion">';
                            foreach ($value as $keyItem => $item) {
                                $tabs .= '<li class="list-group-item">
                                <a href="torneo/'.$item['temporadaId'].'/'.$item['torneoIdBetsapi'].'/'.$item['faseActiva'].'">'
                                .$item['pais'].' - '
                                .$item['nombreCom'].' - '
                                .'(temporadaId -'.$item['temporadaId'].') - '
                                .'(idBetsapi -'.$item['torneoIdBetsapi'].') - '
                                // .'(tipoTorneo -'.$item['tipoTorneo'].') - '
                                .'(faseActive -'.$item['faseActiva'].')'
                                // .$item['tipoEliminatoria']
                                .'</a></li>';
                            }
                        $tabs .= '</ul>

                    </div>
                </div>
            </div>';
            $contadorTabs++;
        }
        echo json_encode($tabs);
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