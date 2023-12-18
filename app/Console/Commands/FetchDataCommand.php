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
     * Execute the console command.
     */

    public function handle()
    {
        $fecha = HelperFunctions::get_fecha_current_generic();
        $dataDb = Partido::where('fecha', $fecha)
        ->whereNotIn('betsapi', [-1, 1])
        ->get();
        // 6809273
        foreach ($dataDb as $item) {
            //https://api.b365api.com/v1/event/view?token=153716-4djEyj4e6JZVou&event_id=6809275&LNG_ID=3
            $url = 'https://api.b365api.com/v1/event/view?token=153716-4djEyj4e6JZVou&event_id='.$item->betsapi.'&LNG_ID=3';
            $response = Http::get($url);
            if ($response->ok()) {
                $data = $response->json();
                foreach ($data['results'] as $key => $value) {
                    if(intval($value['id']) === intval($item->betsapi)){
                        $goles = $value['ss'];
                        if ($goles === null) {
                            $goles = "0-0";
                        }
                        $goles = explode("-", $goles);
                        $goles_local = $goles[0];
                        $goles_visitante = $goles[1];
                        var_dump($value['id'].' - events mayor > 0 '.count($value['events']));
                        $updateDataPartido = DB::table('partido')
                        ->where('betsapi', $value['id'])
                        ->update([
                            'estado_partido' => count($value['events']) > 0 ? 1 : $value['time_status'],
                            'goles_local' => $goles_local,
                            'goles_visitante' => $goles_visitante
                        ]);
                    }
                }
            }
        }
    }
}
