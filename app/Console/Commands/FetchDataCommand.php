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
            $url = 'https://api.b365api.com/v1/event/view?token=153716-4djEyj4e6JZVou&event_id='.$item->betsapi;
            $response = Http::get($url);
            if ($response->ok()) {
                $data = $response->json();
                foreach ($data['results'] as $key => $value) {
                    if(intval($value['id']) === intval($item->betsapi)){
                        var_dump($value['id']);
                        $updateDataPartido = DB::table('partido')
                        ->where('betsapi', $value['id'])
                        ->update([
                            'estado_partido' => $value['time_status'],
                        ]);
                    }
                }
            }
        }
    }
}
