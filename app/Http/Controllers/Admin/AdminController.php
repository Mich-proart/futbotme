<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//importaciones
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Http\Controllers\Admin\AdminEquiposController;
use App\Helpers\HelperFunctions;


//alineacion https://api.b365api.com/v1/event/lineup?token=153716-4djEyj4e6JZVou&LNG_ID=3&event_id=5981919

// evento https://api.betsapi.com/v1/event/view?token=153716-4djEyj4e6JZVou&LNG_ID=3&event_id=5981919

// Controlador para el panel de admin
class AdminController extends Controller
{
    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/

    /****** obtenemos todos los partidos del dia sin agrupar, solo partidos del dia *****/
    public static function get_all_partidos_curtdate($fechaActual){
        $partidosObj = array();
        $dataPartidosDia = DB::table('partido')
        ->select('*')
        ->where('fecha', '=', $fechaActual)
        ->get();

        // convertimos el resultado a obj con repuestas personalizadas
        foreach ($dataPartidosDia as $key => $value) {
            $obj = [
                'idPartido' => $value->id,
                'idBetsapi' => $value->betsapi,
                'tituloTemporada' => Self::get_name_temporada($value->temporada_id),
                'fecha' => $value->fecha,
                'hora_prevista' => $value->hora_prevista,
                'hora_real' => $value->hora_real,
                'estadoPartido' => $value->estado_partido,
                'idLocal' => $value->equipoLocal_id,
                'nombreLocal' => isset(AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->nombre) ? AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->nombre : 'Sin nombre',
                'golLocal' => $value->goles_local,
                'idVisitante' => $value->equipoVisitante_id,
                'nombreVisitante' => isset(AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->nombre) ? AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->nombre : 'Sin nombre', 
                'golVisitante' => $value->goles_visitante
            ];
            array_push($partidosObj, $obj);
        }
        return $partidosObj;
    }

    /****** obtenemos los datos de los directos del fichero json y retornamos json de directos *****/
    public static function obtener_directos_de_json(){
        // Lee el contenido del archivo JSON
        $ruta = base_path('directos.json'); // Ruta al archivo JSON
        $contenido = file_get_contents($ruta);
    
        // Decodifica el JSON
        $datos = json_decode($contenido, true);

        // obtenemos los results donde esta el array de partidos
        $response = $datos['results'];
    
        // Retorna el array de datos como viene de la API
        return $response;
    }

    /****** obtenemos una mezcla de los datos de Base de datos y Json *****/
    //public static function get_mix_partidos_db_mix_json($fechaActual){
        // $partidosObj = array();
        // $directos_json = Self::obtener_directos_de_json();
        // $dataPartidosDia = DB::table('partido')
        // ->select('*')
        // ->where('fecha', '=', $fechaActual)
        // ->get();

        // guardamos los partidos en base de datos
        // foreach ($dataPartidosDia as $key => $value) {
        //     $obj = [
        //         'idPartido' => $value->id,
        //         'idBetsapi' => $value->betsapi,
        //         'tituloTemporada' => Self::get_name_temporada($value->temporada_id)[0]->nombre,
        //         'fecha' => $value->fecha,
        //         'hora_prevista' => $value->hora_prevista,
        //         'hora_real' => $value->hora_real,
        //         'estadoPartido' => $value->estado_partido,
        //         'idLocal' => $value->equipoLocal_id,
        //         'nombreLocal' => AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->nombre,
        //         'golLocal' => $value->goles_local,
        //         'idVisitante' => $value->equipoVisitante_id,
        //         'nombreVisitante' => AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->nombre,
        //         'golVisitante' => $value->goles_visitante
        //     ];
        //     array_push($partidosObj, $obj);
        // }

        // guardamos los partidos en json
        // foreach ($directos_json as $key => $value) {
        //     $objNuevo = [
        //         'idPartido' => 'No disponible',
        //         'idBetsapi' => $value['id'],
        //         'tituloTemporada' => (count(Self::get_name_temporada($value['league']['id'])) > 0) ? Self::get_name_temporada($value['league']['id'])[0]->nombre : $value['league']['name'],
        //         'fecha' => HelperFunctions::get_fecha_format_second($value['time'])['fechaFormat'],
        //         'hora_prevista' =>  HelperFunctions::get_fecha_format_second($value['time'])['horaFormat'],
        //         'hora_real' =>  HelperFunctions::get_fecha_format_second($value['time'])['horaFormat'],
        //         'estadoPartido' => $value['time_status'],
        //         'idLocal' => $value['home']['id'],
        //         'nombreLocal' => (count(AdminEquiposController::getDataEquipo($value['home']['id'])) > 0) ? AdminEquiposController::getDataEquipo($value['home']['id'])[0]->nombre : $value['home']['name'],
        //         'golLocal' => isset($value['scores']) ? $value['scores'][2]['home'] : 0,
        //         'idVisitante' => $value['away']['id'],
        //         'nombreVisitante' => (count(AdminEquiposController::getDataEquipo($value['away']['id'])) > 0) ? AdminEquiposController::getDataEquipo($value['away']['id'])[0]->nombre : $value['away']['name'],
        //         'golVisitante' => isset($value['scores']) ? $value['scores'][2]['away'] : 0, 
        //     ];
        //     array_push($partidosObj, $objNuevo);
        // }
        //var_dump(HelperFunctions::get_fecha_format_second(1700416800)['fechaFormat']);
        //var_dump(HelperFunctions::get_fecha_format_second(1700416800)['horaFormat']);
        //var_dump($directos_json);
        //return $partidosObj;
    //}

    /****** directos agrupados por id de competicion ******/
    public static function obtener_directos_agrupados_competicion(){
        // obtenemos los directos a pelo para ordenarlos
        $response = Self::obtener_directos_de_json();
        $partidosAgrupados = collect($response)->groupBy('league.id')->sortKeys();

        // retornamos los directos agrupados por competicion
        return $partidosAgrupados;
    }

    /****** obtenemos el nombre de la temporada por medio de idTemporada  *****/
    public static function get_name_temporada($idTemporada){
        $dataTemporada = DB::table('temporada')
        ->select('*')
        ->where('id', '=', $idTemporada)
        ->get();
        return $dataTemporada;
    }

    /****** obtenemos el nombre de la fase por medio de jornada en tabla partido  *****/
    public static function get_name_fase($idFase){
        $dataFase = DB::table('fase')
        ->select('*')
        ->where('id', '=', $idFase)
        ->get();
        return $dataFase;
    }

    /****** obtenemos los partidos de pasados en el mismo dia *****/
    public static function get_partidos_curtdate($estado, $fechaActual){
        // estados partidos || 0 -> no jugado || 1-> final || 2-> en juego || 6-> descanso
        $partidosDia = [];
        $partidosAgrupados = [];
        if($estado == 0){ $estado_verif = [0];}
        if($estado == 1){ $estado_verif = [1];}
        if($estado == 2 || $estado == 6){ $estado_verif = [2,6];}
        // aqui mandamos a traer todos los partidos con todos los estados
        if($estado == 100){ $estado_verif = [0,1,2,3,4,5,6,7,8,9,10,11];}
        $dataPartidosDia = DB::table('partido')
        ->select('*')
        ->where('fecha', '=', $fechaActual)
        ->whereIn('estado_partido', $estado_verif)
        ->get();

        // de la respuesta generamos array matriz para tener temporadas y partidos dentro
        foreach ($dataPartidosDia as $key => $value) {
            $obj = [
                'fechaPartido' => $value->fecha,
                'horaPartido' => $value->hora_prevista,
                'idFase' => Self::get_name_fase($value->jornada)[0]->id,
                'nombreFase' => Self::get_name_fase($value->jornada)[0]->nombre,
                'partidoId' => $value->id,
                'escudoLocal' => isset(AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->escudo) ? AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->escudo : '',
                'equipoLocal_id' => $value->equipoLocal_id,
                'nombre_local' => isset(AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->nombre) ? AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->nombre : '',
                'nombre_local_completo' => isset(AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->nombre_completo) ? AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->nombre_completo : '',
                'nombre_local_corto' => isset(AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->nombreCorto) ? AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->nombreCorto : '',
                'goles_local' => $value->goles_local,
                'escudoVisitante' => isset(AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->escudo) ? AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->escudo : '',
                'equipoVisitante_id' => $value->equipoVisitante_id,
                'nombre_visitante' => isset(AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->nombre) ?AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->nombre : '',
                'nombre_visitante_completo' => isset(AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->nombre_completo) ? AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->nombre_completo : '',
                'nombre_visitante_corto' => isset(AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->nombreCorto) ? AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->nombreCorto : '',
                'goles_visitante' => $value->goles_visitante
            ];
            $obj_parent = [
                'idTemporadaSeccion' => Self::get_name_temporada($value->temporada_id)[0]->id,
                'nombreTemporadaSeccion' => Self::get_name_temporada($value->temporada_id)[0]->nombre,
                'datosTemporadaSeccion' => $obj
            ];
            array_push($partidosDia, $obj_parent);
        }

        // Creamos un nuevo array para organizar los partidos por temporada
        foreach ($partidosDia as $partido) {
            $nombreTemporada = $partido["nombreTemporadaSeccion"];
            $idTemporada = $partido['idTemporadaSeccion'];
            $partidoDetalle = [
                'idTemporada' => $idTemporada,
                'datosTemporadaSeccion' => $partido['datosTemporadaSeccion'],
                'nombreFase' => $partido['datosTemporadaSeccion']['nombreFase']
            ];
            if (!isset($partidosAgrupados[$nombreTemporada])) {
                $partidosAgrupados[$nombreTemporada] = [];
            }
            $partidosAgrupados[$nombreTemporada][] = $partidoDetalle;
        }

        // ordenamo el resultado para devolverlo ordenado por el nombre
        ksort($partidosAgrupados);
        return $partidosAgrupados;
    }

    /*****++ verificamos si partido betsapi esta en db para update automatico */
    public static function verify_id_betsapi_in_db($idBetsapi){
        $query_partido = DB::table('partido')
        ->select('*')
        ->where('betsapi', '=', $idBetsapi)
        ->get();
        return $query_partido;
    }

    /*****++ obtenemos todos los datos de un partido por medio del id */
    public static function get_datos_partido_db($idpartido){
        $query_partido = DB::table('partido')
        ->select('*')
        ->where('id', '=', $idpartido)
        ->get();
        return $query_partido;
    }

    /*****++ obtenemos todos de los medios de un partido */
    public static function get_medio_partido_in_db($idpartido){
        $query_medio_partido = DB::table('partido_medio')
        ->select('*')
        ->where('partido_id', '=', $idpartido)
        ->get();
        return $query_medio_partido;
    }

    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/

    // enviamos la vista y los datos de los directos que vienen del fichero json
    public function index(){
        // obtenemos todos los partidos del dia
        $partidosTodosLosEstados = $this->get_all_partidos_curtdate(HelperFunctions::get_fecha_current_generic());
        $totalPartidosHoy = count($partidosTodosLosEstados);
        return view('admin.index')->with([
            'totalPartidosHoy' => $totalPartidosHoy,
            'partidosTodosLosEstados' => $partidosTodosLosEstados,
        ]);
    }

    // editar partidos en DB los que haremos manuales
    public function editarPartido(Request $request){
        // Obtener la variable enviada por el front
        $data = $request->all()['formData']; 
        $id_partido = $data['idPartido'];
        $id_partido_betsapi_no = $data['idPartidoBetsapiOno'];
        $fecha_partido = $data['fechaPartido'];
        $hora_prevista = $data['horaPrevistaPartido'];
        $hora_real = $data['horaRealPartido'];
        $estado_partido = $data['estadoPartido'];
        $id_local_partido = $data['idLocalPartido'];
        $gol_local_partido = $data['golLocalPartido'];
        $id_visitante_partido = $data['idVisitantePartido'];
        $gol_visitante_partido = $data['golVisitantePartido'];
        $temporada_partido = $data['idTemporadaPartido'];

        // Actualizamos datos en db
        $filasActualizadas = DB::table('partido')
        ->where('id', $id_partido)
        ->where('temporada_id', $temporada_partido)
        ->where('fecha', $fecha_partido)
        ->where('equipoLocal_id', $id_local_partido)
        ->where('equipoVisitante_id', $id_visitante_partido)
        ->update([
            'estado_partido' => $estado_partido,
            'fecha' => $fecha_partido,
            'hora_prevista' => $hora_prevista,
            'hora_real' => $hora_real,
            'goles_local' => $gol_local_partido,
            'goles_visitante' => $gol_visitante_partido,
            'betsapi' => $id_partido_betsapi_no
        ]);

        // Volvemos a traer los datos actualizados de la fila partido actualizada
        $dataPartidoModificado = DB::table('partido')
        ->select('*')
        ->where('id', '=', $id_partido)
        ->where('temporada_id', $temporada_partido)
        ->get();

        $obj_response = [
            'idPartido' => $dataPartidoModificado[0]->id,
            'estaPartido' => $dataPartidoModificado[0]->estado_partido,
            'golesLocal' => $dataPartidoModificado[0]->goles_local,
            'golesVisitante' => $dataPartidoModificado[0]->goles_visitante,
            'idLocal' => $dataPartidoModificado[0]->equipoLocal_id,
            'idVisitante' => $dataPartidoModificado[0]->equipoVisitante_id,
        ];

        //var_dump($obj_response);

        // $partidosDirectos = $this->get_partidos_curtdate(2,HelperFunctions::get_fecha_current_generic());
        // generamos fichero json con el partido editado
        // Convertir el array a formato JSON
        $json = json_encode($obj_response, JSON_PRETTY_PRINT);
        // Ruta y nombre del archivo donde se guardará el JSON
        $rutaArchivo = base_path('directos-futbolme.json'); // Ruta al archivo JSON en la raíz del proyecto
        // Guardar el JSON en el archivo
        if (file_exists($rutaArchivo)) {
            file_put_contents($rutaArchivo, $json);
            return  json_encode('guardado');
        }
        return  json_encode('error');
    }

    // goles del partido matcheado con id de betsapi
    public static function golesPartidoBetsapiDb($idBetsapi){
        $dataParido = DB::table('partido')
        ->select('*')
        ->where('betsapi', '=', $idBetsapi)
        ->get();
        return $dataParido;
    }

    // hacemos el update en db con los valores ya matcheados para updatear los goles
    public static function updateDbPartidosMatching($arrayMatcheados){
        try {
            $array_response_front = array();
            // updateamos valores en la base de datos
            foreach ($arrayMatcheados as $key => $value) {
                $updateDataPartido = DB::table('partido')
                ->where('betsapi', $value['idBetsapi'])
                ->update([
                    'goles_local' => $value['golesLocal'],
                    'goles_visitante' => $value['golesVisitante']
                ]);

                $obj_response = [
                    'idBetsapi' => $value['idBetsapi'],
                    'leagueId' => $value['leagueId'],
                    'idLocal' => $value['idLocal'],
                    'nombreLocal' => $value['nombreLocal'],
                    'golesLocal' => AdminController::golesPartidoBetsapiDb($value['idBetsapi'])[0]->goles_local,
                    'idVisitante' => $value['idVisitante'],
                    'nombreVisitante' => $value['nombreVisitante'],
                    'golesVisitante' => AdminController::golesPartidoBetsapiDb($value['idBetsapi'])[0]->goles_visitante
                ];
                array_push($array_response_front,$obj_response);
            }
            return $array_response_front;

        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar el usuario: ' . $e->getMessage()], 500);
        }
    }

    // actualizamos partidos en DB por medio de cron consumiendo url api
    public function updateAutomaticPartido(Request $request){
        // $id_betsapi_partido = 6808532;
        $array_response_id_match = array();
        $data = $request->all()['response_array'];
        foreach ($data as $key => $value) {
            if(count($this->verify_id_betsapi_in_db(intval($value['idBetsapi'])))){
                $obj_response = [
                    'idBetsapi' => $value['idBetsapi'],
                    'leagueId' => $value['leagueId'],
                    'idLocal' => $value['idLocal'],
                    'nombreLocal' => $value['nombreLocal'],
                    'golesLocal' => $value['golesLocal'],
                    'idVisitante' => $value['idVisitante'],
                    'nombreVisitante' => $value['nombreVisitante'],
                    'golesVisitante' => $value['golesVisitante']
                ];
                array_push($array_response_id_match,$obj_response);
            }
        }
        if(count($array_response_id_match) > 0){
            echo json_encode($this->updateDbPartidosMatching($array_response_id_match));
        }else{
            return response()->json(['error' => 'Error al actualizar el usuario: ' . $e->getMessage()], 500);
        }
    }

    public function refreshStatusFootballSoccer(){
        $jsonFile = base_path() . '/directos-futbolme.json';
        var_dump(response()->file($jsonFile));

        // var_dump("test");
    }


    
    



































    //////////////////////////////////////
    ////////////////////////////////////// MOVER LUEGO A SU PROPIO CONTROLADOR
    //////////////////////////////////////

    // function para obtener todas las federaciones de todas las comunidades 
    public function indexFederaciones(){
        return view('admin.federacion');
    }

    // funcion con la cual generamos el menu 
    public function indexCrearMenu(){
        return view('admin.crearMenu');
    }
}