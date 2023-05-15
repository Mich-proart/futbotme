<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Helpers\HelperFunctions;


class BuscadorController extends Controller{
    
    public function buscador(Request $request){ 

        // Obtener la variable ingresada en el input
        $data = $request->all()['formData'];     
        
        // array Jugadores
        $arrayJugadores = array();
        
        $users = DB::table('jugador')
            ->select(DB::raw('*'))
            ->where('nombre', 'LIKE', '%'.$data.'%')            
            ->get();

        // formateamos valores del jugador para obtener mas datos con relacion en otras tablas
        foreach ($users as $value) {
            
            $objJugador = [
                'tipo' => 'jugador',
                'idJugador' => $value->id,
                'nombre' => $value->nombre,
                'apellidos' => $value->apellidos,
                'apodo' => $value->apodo,
                'sexo' => $value->sexo,
                'fechaNacimiento' => $value->fecha_nacimiento,
                'lugarNacimiento' => $value->lugar_nacimiento,
                'altura' => $value->altura,
                'peso' => $value->peso,
                'dorsal' => $value->dorsal,
                'esFichaje' => $value->es_fichaje,
                'esBaja' => $value->es_baja,
                'posicion' => $value->posicion,  
                'valorFunction' =>HelperFunctions::obtenerDatosOtraTabla($value->id)
            ];

            array_push($arrayJugadores, $objJugador);
        }


        // array equipos
        $arrayEquipos = array();

        $teams = DB::table('equipo')
            ->select(DB::raw('*'))
            ->where('nombre', 'LIKE', '%'.$data.'%')            
            ->get();

        // formateamos valores del equipo para obtener mas datos con relacion en otras tablas
        foreach ($teams as $value) {

            $objEquipo = [
                'tipo' => 'equipo',
                'idEquipo' => $value->id,
                'nombre' => $value->nombre,
                'nombreCompleto' => $value->nombre_completo,
                'nombreCorto' => $value->nombreCorto,
                'clubId' => $value->club_id,
                'categoria' => HelperFunctions::categoriaClub($value->categoria_id),
                'fundado' => $value->fundado,
                'debutNacional' => $value->debut_nacional,
                'escudo' => $value->escudo,
                'sexo' => $value->sexo,
                'slug' => $value->slug,
                'betsapi' => $value->betsapi,
                'codigoRFEF' => $value->codigoRFEF,
                'fundado' => $value->fundado,
                'fundado' => $value->fundado,
                'fundado' => $value->fundado,
            ];

            array_push($arrayEquipos, $objEquipo);
        }
        
        // Retornar la respuesta (en formato JSON)
        return response()->json(['jugadores' => $arrayJugadores, 'equipos' => $arrayEquipos]);        
    }
}
