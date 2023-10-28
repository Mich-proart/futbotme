<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// modelos
use App\Models\Torneo;
use App\Models\Comunidad;

class AdminLigasController extends Controller
{
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
        'temporada.id as temporadaId', 'torneo.nombre', 'torneo.pais_id', 'torneo.comunidad_id', 'pais.nombre as nombrePais', 'torneo.categoria_torneo_id', 
        'torneo.id as torneoId', 'torneo.apifutbol_tipo', 'torneo.betsapi', 'comunidad.nombre as nombreComunidad', 'liga.jornadas', 'liga.jornadaActiva')
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

        // creamos array para obtener los nombres de comunidad y array de torneos
        foreach ($consultaCompeticiones as $key => $value) {
            $obj = [
                'nombreComunidad' => $value['nombreComunidad'],
                'torneosComunidad' => [
                    'nombreCom' => $value['nombre'],
                    'idBetsapi' => $value['betsapi'],
                    'pais' => $value['nombrePais'],'temporadaId' => $value['temporadaId'],
                    'torneoId' => $value['torneoId']
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
                                $tabs .= '<li class="list-group-item" style="cursor:pointer;">'.$item['pais'].' - '.$item['nombreCom'].'</li>';
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