<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//importaciones
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminEquiposController;
use App\Http\Controllers\Admin\AdminJugadoresController;
use App\Helpers\HelperFunctions;

class AdminPartidoLigaTorneoController extends Controller
{
    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/
    public static function get_medios(){
        $medios = DB::table('medio')
        ->select('*')
        ->get();
        return $medios;
    }
    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/
    public function editarPartidoLigaTorneo($idPartido){
        $datosPartido = AdminController::get_datos_partido_db($idPartido);
        $medioPartido = AdminController::get_medio_partido_in_db($idPartido);
        $dataEquipoLocal = AdminEquiposController::getDataEquipo($datosPartido[0]->equipoLocal_id);
        $dataEquipoVisitante = AdminEquiposController::getDataEquipo($datosPartido[0]->equipoVisitante_id);
        $jugadoresEquipos = array();
        
        $medios = $this->get_medios();

        return view('admin.editarPartido')->with(
            [
                'datosPartido' => $datosPartido,
                'dataEquipoLocal' => $dataEquipoLocal,
                'plantillaLocal' => AdminJugadoresController::getCurrentPlayersTeam($datosPartido[0]->equipoLocal_id),
                'plantillaVisitante' => AdminJugadoresController::getCurrentPlayersTeam($datosPartido[0]->equipoVisitante_id),
                'dataEquipoVisitante' => $dataEquipoVisitante,
                'medios' => $medios,
                'medioPartido' => $medioPartido
                
            ]
        );
    }

    public static function guardarGolesPartido(Request $request){
        // Obtener los datos que nos vienen del front
        $data = $request->all()['objSend'];
        $insertData = [
            'jugador_id' => $data['idJugador'],
            'partido_id' => $data['idPartido'],
            'temporada_id' => $data['temporadaIdPartido'],
            'minuto' => $data['minutos'],
            'tipo' => $data['tipoJugada'],
            'esLocal' => $data['esLocal'],
            'observaciones' => $data['observaciones'],
        ];
        $result = DB::table('gol')->insert($insertData);
        if ($result) {
            $minutosPartido = $data['minutos'];
            $idJugador = $data['idJugador'];
            $apodoJugdor = AdminJugadoresController::getDataJugador($data['idJugador'])[0]->apodo;

            if(intval($data['esLocal']) == 1){
                $string_enlace = "*A ".$minutosPartido."' - <a href='/jugador.php?id=".$idJugador."' target='_blank'>".$apodoJugdor."</a>, <b>1</b>-0<br />";
            }else{
                $string_enlace = "*B ".$minutosPartido."' - <a href='/jugador.php?id=".$idJugador."' target='_blank'>".$apodoJugdor."</a>, <b>1</b>-0<br />";
            }
            echo json_encode($string_enlace);
        } else {
            echo json_encode("error");
        }




        // $updateGoleadorPartido = DB::table('gol')
        // ->where('partido_id', $idPartido)
        // ->where('temporada_id', '=', $temporadaIdPartido)
        // ->update([
        //     'estado_partido' => isset($value['events']) ? $time_status : 5,
        //     'goles_local' => $goles_local,
        //     'goles_visitante' => $goles_visitante
        // ]);
    }
}