<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

// importaciones
use App\Models\Partido;
use App\Helpers\HelperFunctions;

class FetchDataDirect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:data-direct';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch data update from the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $fileContent = file_get_contents('/home/d-shisnet/Documentos/futbotme/directos.json');
        // if ($fileContent !== false) {
        //     $data = json_decode($fileContent, true);

        //     if ($data !== null) {
        //         foreach ($data['results'] as $key => $value) {
        //             $goles = $value['ss'];
        //             if ($goles === null) {
        //                 $goles = "0-0";
        //             }
        //             $goles = explode("-", $goles);
        //             $goles_local = $goles[0];
        //             $goles_visitante = $goles[1];
        //                 $updateDataPartido = DB::table('partido')
        //                 ->where('betsapi', $value['id'])
        //                 ->update([
        //                     'estado_partido' => 2,
        //                     'goles_local' => $goles_local,
        //                     'goles_visitante' => $goles_visitante
        //                 ]);
        //             $objt = [
        //                 'id_partido' => $value['id'],
        //                 'estado_partido' => $value['time_status'],
        //                 'goles_local' => $goles_local,
        //                 'goles_visitante' => $goles_visitante
        //             ];
        //             var_dump($objt);
        //         }
        //     } else {
        //         // JSON inválido
        //         echo 'Error al decodificar el JSON';
        //     }
        // } else {
        //     // Error al leer el archivo
        //     echo 'Error al leer el archivo';
        // }


        // por medio de curl
        $url = 'https://api.b365api.com/v3/events/inplay?sport_id=1&token=153716-4djEyj4e6JZVou&LNG_ID=3';
        $response = Http::get($url);
        if ($response->ok()) {
            $data = $response->json();
            foreach ($data['results'] as $key => $value) {
                $goles = $value['ss'];
                if ($goles === null) {
                    $goles = "0-0";
                }
                $goles = explode("-", $goles);
                $goles_local = $goles[0];
                $goles_visitante = $goles[1];
                $estado_partido = $value['time_status'];
                if(intval($value['timer']['ts']) > 0){
                    $estado_partido = 2;
                }

                if(intval($value['timer']['ts']) <= 0){
                    $estado_partido = 0;
                }

                if ($value['time_status'] === 3) {
                    $estado_partido = 1;
                }
                    //'estado_partido' => (intval($value['timer']['ts']) > 0) ? 2 : 0,
                    $updateDataPartido = DB::table('partido')
                    ->where('betsapi', $value['id'])
                    ->update([
                        'tiempo_partido' => (90 + intval($value['timer']['ta'])),
                        'estado_partido' => $estado_partido,
                        'goles_local' => $goles_local,
                        'goles_visitante' => $goles_visitante
                    ]);
                $objt = [
                    'id_partido' => $value['id'],
                    'estado_partido' => $value['time_status'],
                    'goles_local' => $goles_local,
                    'goles_visitante' => $goles_visitante,
                    'timer' => $value['timer'],
                    'estado_modif' => $estado_partido
                ];
                DB::table('wtestapi')->insert([
                    'partidoid' => $value['id'],
                    'datos' => json_encode($objt),
                ]);
                var_dump($objt);
            }
        }
    }
}
