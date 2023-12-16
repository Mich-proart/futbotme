<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// modelos
use App\Models\Torneo;
use App\Models\Comunidad;

// importamos funciones externas
use App\Helpers\HelperFunctions;

class AdminLigasController extends Controller
{

    // onchange para cambiar de valores de temporada id temporada activa 
    // $resultado = Partido::select(
    //     'categoria_torneo.id as categoria_id',
    //     // ... (resto de los campos que necesitas)
    // )
    // ->join('equipo as ec', 'ec.id', '=', 'partido.equipoLocal_id')
    // ->join('equipo as ef', 'ef.id', '=', 'partido.equipoVisitante_id')
    // ->join('temporada', 'temporada.id', '=', 'partido.temporada_id')
    // // ... (resto de los joins)
    // ->where('partido.temporada_id', '=', 1)
    // ->where('partido.jornada', '=', 16)
    // ->orderBy('partido.fecha')
    // ->orderBy('partido.hora_prevista')
    // ->get();


    // obtenemos los partidos de la liga activa por medio de la variable de parametros
    public function competicionLigaActiva($idBetsapi,$temporadaId,$jornadaActiva,$totalJordanas){

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
            WHERE p.temporada_id=$temporadaId AND p.jornada=$jornadaActiva
            ORDER BY p.fecha, p.hora_prevista");

        return view('admin.ligaActiva')->with(
            [
                'estadosPartidos' => HelperFunctions::get_estados_partidos(),
                'resultado' => $resultado,
                'idBetsapi' => $idBetsapi,
                'temporadaId' => $temporadaId,
                'jornadaActiva' => $jornadaActiva,
                'totalJordanas' => $totalJordanas,
                'urlUpcomingPartido' => HelperFunctions::get_url_upcoming($idBetsapi)
            ]
        );
    }
    // post de tipos de ligas por seleccion de tipo competicion
    public function indexCompeticionesLigas(Request $request){

        // Obtener la variable enviada por el front
        $data = $request->all()['formData']; 
        $tipo_competicion = $data['tipoCompeticion'];
        $valor_categoria = $data['valorCat'];
        $arrayTorneos = array();
        $torneosAgrupados = [];
        $tabs = '';
        $contadorTabs = 0;
        
        // consulta obtener las ligas
        $consultaCompeticiones = Torneo::select(
            'temporada.id as temporadaId',
            'torneo.nombre',
            'torneo.pais_id',
            'torneo.comunidad_id',
            'pais.nombre as nombrePais',
            'torneo.categoria_torneo_id',
            'torneo.id as torneoId',
            'torneo.apifutbol_tipo',
            'comunidad.nombre as nombreComunidad',
            'torneo.betsapi as torneoIdBetsapi',
            'torneo.tipo_torneo as tipoTorneo',
            'liga.jornadas as jornadasTotal', 
            'liga.jornadaActiva as jornadaActiva'
        )
        ->join('temporada', 'temporada.torneo_id', '=', 'torneo.id')
        ->join('pais', 'pais.id', '=', 'torneo.pais_id')
        ->join('comunidad', 'comunidad.id', '=', 'torneo.comunidad_id')
        ->join('liga', 'liga.id', '=', 'torneo.id')
        ->where('torneo.tipo_torneo', $tipo_competicion)
        ->where('torneo.categoria_torneo_id', $valor_categoria)
        ->orderBy('torneo.categoria_torneo_id')
        ->orderBy('torneo.orden'); // Agrupa por el nombre de la comunidad

        // where union para hacer dos consultas a la vez
        $consultaCompeticiones = $consultaCompeticiones
            ->where(function($query) {
            $query->where('torneo.visible', '>', 3);
            //->orWhere('torneo.visible', '!=', 0);
            //->orWhere('torneo.visible', '<', 5);
            })
        ->get();

        //echo "<pre>";var_dump($consultaCompeticiones);echo "</pre>";

        // creamos array para obtener los nombres de comunidad y array de torneos
        foreach ($consultaCompeticiones as $key => $value) {
            $obj = [
                'nombreComunidad' => $value['nombreComunidad'],
                'torneosComunidad' => [
                    'nombreCom' => $value['nombre'],
                    'idBetsapi' => $value['betsapi'],
                    'pais' => $value['nombrePais'],
                    'temporadaId' => $value['temporadaId'],
                    'torneoId' => $value['torneoId'],
                    'torneoIdBetsapi' => $value['torneoIdBetsapi'],
                    'tipoTorneo' => $value['tipoTorneo'],
                    'jornadasTotal' => $value['jornadasTotal'],
                    'jornadaActiva' => $value['jornadaActiva']
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
                                <a href="liga/'.$item['torneoIdBetsapi'].'/'.$item['temporadaId'].'/'.$item['jornadaActiva'].'/'.$item['jornadasTotal'].'">'
                                .$item['pais'].' - '
                                .$item['nombreCom'].' - '
                                .'(temporadaId -'.$item['temporadaId'].') '
                                .'(idBetsapi -'.$item['torneoIdBetsapi'].') '
                                //.'(tipoTorneo -'.$item['tipoTorneo'].')- '
                                .'(Activa -'.$item['jornadaActiva'].') '
                                .'(totalJornadas -'.$item['jornadasTotal'].')</a></li>';
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
    public function indexLigas(){
        $resultados = '';
        return view('admin.liga')->with('resultados', $resultados);
    }
}

// REAL LIGAS 
//SELECT te.id, tor.nombre, tor.pais_id, tor.comunidad_id, tor.apuestaMA, pa.nombre nombrePais, tor.categoria_torneo_id, tor.apifutbol_tipo, co.nombre nombreComunidad, tor.betsapi , li.jornadas, li.jornadaActiva FROM torneo tor INNER JOIN temporada te ON te.torneo_id=tor.id INNER JOIN pais pa ON pa.id=tor.pais_id INNER JOIN comunidad co ON co.id=tor.comunidad_id INNER JOIN liga li ON li.id=tor.id WHERE tor.tipo_torneo=1 AND tor.visible>3 AND tor.categoria_torneo_id=1 ORDER BY tor.apuestaMA DESC, tor.categoria_torneo_id, tor.comunidad_id, tor.orden
//SELECT te.id, tor.nombre, tor.pais_id, tor.comunidad_id, tor.apuestaMA, pa.nombre nombrePais, tor.categoria_torneo_id, tor.apifutbol_tipo, co.nombre nombreComunidad , li.jornadas, li.jornadaActiva FROM torneo tor INNER JOIN temporada te ON te.torneo_id=tor.id INNER JOIN pais pa ON pa.id=tor.pais_id INNER JOIN comunidad co ON co.id=tor.comunidad_id INNER JOIN liga li ON li.id=tor.id WHERE tor.tipo_torneo=1 AND tor.visible<5 AND tor.categoria_torneo_id=1 ORDER BY tor.apuestaMA DESC, tor.categoria_torneo_id, tor.orden"