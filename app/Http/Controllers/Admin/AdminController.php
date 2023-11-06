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


//alineacion https://api.b365api.com/v1/event/lineup?token=153716-4djEyj4e6JZVou&LNG_ID=3&event_id=5981919

// evento https://api.betsapi.com/v1/event/view?token=153716-4djEyj4e6JZVou&LNG_ID=3&event_id=5981919

// Controlador para el panel de admin
class AdminController extends Controller
{
    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/

    /****** obtenemos todos los partidos del dia sin agrupar, solo partidos del dia *****/
    public static function get_all_partidos_curtdate(){
        $fechaActual = Carbon::now();
        $fechaActual = $fechaActual->year.'-'.$fechaActual->month.'-'.$fechaActual->day;
        $fechaActual = '2023-10-31';
        $partidosObj = array();
        $dataPartidosDia = DB::table('partido')
        ->select('*')
        ->where('fecha', '=', $fechaActual)
        ->get();

        // convertimos el resultado a obj con repuestas personalizadas
        //echo "<pre>";
        foreach ($dataPartidosDia as $key => $value) {
            $obj = [
                'idPartido' => $value->id,
                'idBetsapi' => $value->betsapi,
                'tituloTemporada' => Self::get_name_temporada($value->temporada_id),
                'fecha' => $value->fecha,
                'hora' => $value->hora_prevista,
                'estadoPartido' => $value->estado_partido,
                'idLocal' => $value->equipoLocal_id,
                'nombreLocal' => AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->nombre,
                'golLocal' => $value->goles_local,
                'idVisitante' => $value->equipoVisitante_id,
                'nombreVisitante' => AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->nombre,
                'golVisitante' => $value->goles_visitante
            ];
            //var_dump($value);
            array_push($partidosObj, $obj);
        }
        //echo "</pre>";
        //dd($partidosObj);
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
    public static function get_partidos_curtdate($estado){
        // estados partidos || 0 -> no jugado || 1-> final || 2-> en juego || 6-> descanso
        $fechaActual = Carbon::now();
        $fechaActual = $fechaActual->year.'-'.$fechaActual->month.'-'.$fechaActual->day;
        //$horaActual = Carbon::now()->format('H:i:s');
        //$fechaActual = '2023-11-01';
        $fechaActual = '2023-10-31';
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
                'escudoLocal' => AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->escudo,
                'equipoLocal_id' => $value->equipoLocal_id,
                'nombre_local' => AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->nombre,
                'nombre_local_completo' => AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->nombre_completo,
                'nombre_local_corto' => AdminEquiposController::getDataEquipo($value->equipoLocal_id)[0]->nombreCorto,
                'goles_local' => $value->goles_local,
                'escudoVisitante' => AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->escudo,
                'equipoVisitante_id' => $value->equipoVisitante_id,
                'nombre_visitante' => AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->nombre,
                'nombre_visitante_completo' => AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->nombre_completo,
                'nombre_visitante_corto' => AdminEquiposController::getDataEquipo($value->equipoVisitante_id)[0]->nombreCorto,
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
        // echo "<pre>";
        // var_dump($partidosAgrupados);
        // echo "</pre>";
        return $partidosAgrupados;

    }

    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/

    // enviamos la vista y los datos de los directos que vienen del fichero json
    public function index(){
        // obtenemos todos los partidos del dia
        $partidosTodosLosEstados = $this->get_all_partidos_curtdate();
        return view('admin.index')->with(['partidosTodosLosEstados'=>$partidosTodosLosEstados,]);
    }

    // editamos los partidos que estan en la db
    public function editarPartido(Request $request){
        // Obtener la variable enviada por el front
        $data = $request->all()['formData']; 
        $id_partido = $data['idPartido'];
        $temporada_partido  = $data['idTemporadaPartido'];
        $fecha_partido = $data['fechaPartido'];
        $hora_partido = $data['horaPartido'];
        $estado_partido = $data['estadoPartido'];
        $id_local_partido = $data['idLocalPartido'];
        $gol_local_partido = $data['golLocalPartido'];
        $id_visitante_partido = $data['idVisitantePartido'];
        $gol_visitante_partido = $data['golVisitantePartido'];

        $filasActualizadas = DB::table('partido')
        ->where('id', $id_partido)
        ->where('temporada_id', $temporada_partido)
        ->where('fecha', $fecha_partido)
        ->where('equipoLocal_id', $id_local_partido)
        ->where('equipoVisitante_id', $id_visitante_partido)
        ->update([
            'estado_partido' => $estado_partido,
            'fecha' => $fecha_partido,
            'hora_prevista' => $hora_partido,
            'goles_local' => $gol_local_partido,
            'goles_visitante' => $gol_visitante_partido
        ]);

        return json_encode($filasActualizadas);
    } 










    //////////////////////////////////////
    ////////////////////////////////////// MOVER LUEGO A SU PROPIO CONTROLADOR
    //////////////////////////////////////
    // funcion con la que mostraremos el calendario de dia a dia de los tipos de torneos y cantidad de partidos
    public function indexAgenda(){

        $response = $this->obtener_directos_de_json();
        return view('admin.agenda')->with(['datos' => $response]);
    }

    // function para obtener todas las federaciones de todas las comunidades 
    public function indexFederaciones(){
        return view('admin.federacion');
    }

    // funcion con la cual generamos el menu 
    public function indexCrearMenu(){
        return view('admin.crearMenu');
    }
}