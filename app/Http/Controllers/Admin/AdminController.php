<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//importaciones
use Carbon\Carbon;
use Illuminate\Support\Collection;


//alineacion https://api.b365api.com/v1/event/lineup?token=153716-4djEyj4e6JZVou&LNG_ID=3&event_id=5981919

// evento https://api.betsapi.com/v1/event/view?token=153716-4djEyj4e6JZVou&LNG_ID=3&event_id=5981919

// Controlador para el panel de admin
class AdminController extends Controller
{
    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/

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

    /****** obtenemos el nombre de equipo por medio de id  *****/
    public static function get_name_equipo($idEquipo){
        $dataEquipo = DB::table('equipo')
        ->select('*')
        ->where('id', '=', $idEquipo)
        ->get();
        return $dataEquipo;
    }

    /****** obtenemos los partidos de pasados en el mismo dia *****/
    public static function get_partidos_curtdate($estado){
        // estados partidos || 0 -> no jugado || 1-> final || 2-> en juego || 6-> descanso
        $fechaActual = Carbon::now();
        $fechaActual = $fechaActual->year.'-'.$fechaActual->month.'-'.$fechaActual->day;
        //$horaActual = Carbon::now()->format('H:i:s');
        //$fechaActual = '2023-11-01';
        $fechaActual = '2023-10-31';

        //$horaActual = '23:00:00';
        $partidosDia = [];
        if($estado == 0){
            $estado_verif = [0];
        }

        if($estado == 1){
            $estado_verif = [1];
        }

        if($estado == 2 || $estado == 6){
            $estado_verif = [2,6];
        }
        $dataPartidosDia = DB::table('partido')
        ->select('*')
        ->where('fecha', '=', $fechaActual)
        ->whereIn('estado_partido', $estado_verif)
        ->get();

        // de la respuesta generamos array matriz para tener temporadas y partidos dentro
        foreach ($dataPartidosDia as $key => $value) {
            $obj = [
                'idFase' => Self::get_name_fase($value->jornada)[0]->id,
                'nombreFase' => Self::get_name_fase($value->jornada)[0]->nombre,
                'partidoId' => $value->id,
                'equipoLocal_id' => $value->equipoLocal_id,
                'nombre_local' => Self::get_name_equipo($value->equipoLocal_id)[0]->nombre,
                'nombre_local_completo' => Self::get_name_equipo($value->equipoLocal_id)[0]->nombre_completo,
                'nombre_local_corto' => Self::get_name_equipo($value->equipoLocal_id)[0]->nombreCorto,
                'goles_local' => $value->goles_local,
                'equipoVisitante_id' => $value->equipoVisitante_id,
                'nombre_visitante' => Self::get_name_equipo($value->equipoVisitante_id)[0]->nombre,
                'nombre_visitante_completo' => Self::get_name_equipo($value->equipoVisitante_id)[0]->nombre_completo,
                'nombre_visitante_corto' => Self::get_name_equipo($value->equipoVisitante_id)[0]->nombreCorto,
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
        $partidosAgrupados = [];
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

    /*************************************************/
    /********************* HELPERS *******************/
    /*************************************************/

    // enviamos la vista y los datos de los directos que vienen del fichero json
    public function index(){
        // obtenemos el valor de la funcion de la misma clase
        $response = $this->obtener_directos_de_json();
        // estados partidos || 0 -> no jugado || 1-> final || 2-> en juego
        $partidosPorJugarCurDate = $this->get_partidos_curtdate(0);
        $partidosEnJuegoCurDate = $this->get_partidos_curtdate(2);
        $partidosTerminadosCurDate = $this->get_partidos_curtdate(1);

        return view('admin.index')->with([
            'datos' => $response, 
            'partidosPorJugarCurDate'=>$partidosPorJugarCurDate,
            'partidosEnJuegoCurDate'=>$partidosEnJuegoCurDate,
            'partidosTerminadosCurDate'=>$partidosTerminadosCurDate
        ]);
    }

    // funcion con la que mostraremos el calendario de dia a dia de los tipos de torneos y cantidad de partidos
    public function indexAgenda(){
        return view('admin.agenda');
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