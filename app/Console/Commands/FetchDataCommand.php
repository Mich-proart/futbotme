<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

// importaciones
use App\Models\Partido;
use App\Helpers\HelperFunctions;

class FetchDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch data from the database';

    /**
     * Manejar eventos
     *
     * @param array $events Los eventos para procesar
     * @param int $eventId El ID del evento relacionado
     */
    //public function handleEvents(array $obj_response)
    //{
        //var_dump($obj_response);
        // Realizar acciones con los eventos
        //foreach ($events as $event) {
            // Hacer algo con cada evento
            // Por ejemplo, guardar en la base de datos, procesar datos, etc.
            // Aquí puedes trabajar con $event y $eventId según sea necesario
        //}
    //}

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $fecha = HelperFunctions::get_fecha_current_generic();
        $dataDb = Partido::where('fecha', $fecha)
        ->whereNotIn('betsapi', [-1, 1])
        ->get();


        //var_dump($dataDb);
        foreach ($dataDb as $item) {
            //if($item->betsapi == 7542625){
                $horaInicio = $item->hora_prevista;
                $duracionPartidoMinutos = $item->tiempo_partido;
                list($horas, $minutos) = explode(':', $horaInicio);
                $nuevaHoraEnMinutos = ($horas * 60) + $minutos + $duracionPartidoMinutos;
                $nuevasHoras = floor($nuevaHoraEnMinutos / 60);
                $nuevosMinutos = $nuevaHoraEnMinutos % 60;
                $nuevaHora = sprintf("%02d:%02d", $nuevasHoras, $nuevosMinutos);
                $horaActual = date("H:i:s");
                //$horaActual = "19:54";
                if($horaActual > $nuevaHora){
                    echo "finalizamos el partido ".$item->betsapi." - ".$nuevaHora." - ".$horaActual;
                    $updateDataPartido = DB::table('partido')
                        ->where('betsapi', $item->betsapi)
                        ->update([
                            'estado_partido' => 1
                        ]);
                }else{
                    echo "el partido sigue en juego ".$item->betsapi." - ".$horaInicio." - ".$nuevaHora." - ".$horaActual;
                }
            //}
        }
        //     $url = 'https://api.b365api.com/v1/event/view?token=153716-4djEyj4e6JZVou&event_id='.$item->betsapi.'&LNG_ID=3';
        //     $response = Http::get($url);
        //     if ($response->ok()) {
        //         $data = $response->json();
        //         foreach ($data['results'] as $key => $value) {
        //             if(intval($value['id']) === intval($item->betsapi)){
        //                 //if(intval($value['id']) == 6838052){
        //                     $goles = $value['ss'];
        //                     if ($goles === null) {
        //                         $goles = "0-0";
        //                     }
        //                     $goles = explode("-", $goles);
        //                     $goles_local = $goles[0];
        //                     $goles_visitante = $goles[1];
        //                     $time_status = isset($value['events']) && $value['time_status'] == 3 ? 1 : 2;
        //                     var_dump(isset($value['events']) ? $value['id'].' - events mayor > 0 '.count($value['events']) : $value['id'].' - estado anulado');
        //                     if(isset($value['events'])){
        //                         $obj_response = [
        //                             'idPartidoBetsapi' => $value['id'],
        //                             'eventosPartido' => $value['events']
        //                         ];
        //                         //$this->handleEvents($obj_response);
        //                     }
        //                     $updateDataPartido = DB::table('partido')
        //                     ->where('betsapi', $value['id'])
        //                     ->update([
        //                         'estado_partido' => isset($value['events']) ? $time_status : 5,
        //                         'goles_local' => $goles_local,
        //                         'goles_visitante' => $goles_visitante
        //                     ]);
        //                 //}
        //             }
        //         }
        //     }
        // }
    }
}

// antes de nada mirar si en tabla partidos inserta goles la api betsapi
// logica para goleadores
// pasar events como array a una funcion
// la funcion, por cada partido coger id partido betsapi, id de equipo y apodo jugador y nombre equipo
// con esa logica y esos datos modificar tabla gol

// listado goleadores por temporadas 
// SELECT count(g.id) goles, g.jugador_id, j.apodo jugador, e.nombre equipo, e.id equipo_id, e.nombreCorto equipoCorto
//         FROM gol g
//         INNER JOIN jugador j ON g.jugador_id=j.id
//         INNER JOIN equipo e ON j.equipoActual_id=e.id
//         WHERE g.temporada_id= 2 AND tipo<10 GROUP BY g.jugador_id,e.id ORDER BY count(g.id) DESC;


// partidos por temporada_id
//SELECT p.id partido_id, p.estado_partido, p.temporada_id, p.fecha, p.hora_prevista, p.hora_real, p.goles_local, p.goles_visitante, p.jornada, p.clasificado, p.equipoLocal_id, ec.nombreCorto ncLocal,p.equipoVisitante_id, ef.nombreCorto ncVisitante, p.partidoAPI, p.betsapi, p.comentario, p.observaciones, tor.betsapi api_id, tor.tipo_torneo 
//FROM partido p 
//INNER JOIN equipo ec ON ec.id=p.equipoLocal_id 
//INNER JOIN equipo ef ON ef.id=p.equipoVisitante_id 
//INNER JOIN temporada te ON te.id=p.temporada_id 
//INNER JOIN torneo tor ON tor.id=te.torneo_id WHERE p.temporada_id= 2 AND p.fecha="2023-12-19";