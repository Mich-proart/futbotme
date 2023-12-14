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
            ->join('equipo', 'jugador.equipoActual_id', '=', 'equipo.id')
            ->select(DB::raw('jugador.id AS idJugador, jugador.nombre AS nombreJugador, jugador.apellidos AS apellidosJugador, jugador.apodo AS apodoJugador, jugador.sexo AS sexoJugador, jugador.fecha_nacimiento AS fecha_nacimiento_Jugador, jugador.lugar_nacimiento AS lugar_nacimiento_Jugador, jugador.altura AS alturaJugador, jugador.peso AS pesoJugador, jugador.dorsal AS dorsalJugador, jugador.es_fichaje AS es_fichaje_Jugador, jugador.es_baja AS es_baja_Jugador, jugador.posicion AS posicionJugador, equipo.nombre AS nombreEquipo'))
            ->where('jugador.nombre', 'LIKE', '%'.$data.'%')            
            ->get();

        // formateamos valores del jugador para obtener mas datos con relacion en otras tablas
        foreach ($users as $value) {

            // Convertir a minúsculas
            $apodoJugadorMinusculas = strtolower($value->apodoJugador);

            // Reemplazar espacios con guiones
            $apodoSinEspacios = str_replace(' ', '-', $apodoJugadorMinusculas);

            // Reemplazar caracteres acentuados
            $acentos = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú');
            $sinAcentos = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
            $apodoSinAcentos = str_replace($acentos, $sinAcentos, $apodoSinEspacios);
            
            $objJugador = [
                'tipo' => 'jugador',
                'idJugador' => $value->idJugador,
                'nombre' => $value->nombreJugador,
                'apellidos' => $value->apellidosJugador,
                'apodo' => $apodoSinAcentos,
                'sexo' => $value->sexoJugador,
                'fechaNacimiento' => $value->fecha_nacimiento_Jugador,
                'lugarNacimiento' => $value->lugar_nacimiento_Jugador,
                'altura' => $value->alturaJugador,
                'peso' => $value->pesoJugador,
                'dorsal' => $value->dorsalJugador,
                'esFichaje' => $value->es_fichaje_Jugador,
                'esBaja' => $value->es_baja_Jugador,
                'posicion' => $value->posicionJugador,  
                'equipoActual' =>$value->nombreEquipo
            ];

            array_push($arrayJugadores, $objJugador);
        }


        // array equipos
        $arrayEquipos = array();

        $teams = DB::table('equipo')
            ->join('club', 'equipo.club_id', '=', 'club.id')
            ->join('categoria', 'equipo.categoria_id', '=', 'categoria.id')
            ->join('localidad', 'club.localidad_id', '=', 'localidad.id')
            ->select(DB::raw('equipo.id AS idEquipo, equipo.nombre AS nombreEquipo, equipo.nombre_completo AS nombreCompletoEquipo, equipo.nombreCorto AS nombreCortoEquipo, equipo.club_id AS club_id_Equipo, categoria.nombre AS nombreCategoria, equipo.fundado AS fundadoEquipo, equipo.debut_nacional AS debut_nacional_Equipo, equipo.escudo AS escudoEquipo, equipo.sexo AS sexoEquipo, club.slug AS slugClub, equipo.betsapi AS betsapiEquipo, equipo.codigoRFEF AS codigoRFEF_Equipo, localidad.nombre AS nombreLocalidad'))
            ->where('equipo.nombre', 'LIKE', '%'.$data.'%')
            ->where('equipo.slug', '!=', '""')
            ->where('club.slug', '!=', '""')
            ->where('equipo.nombre_completo', '!=', '""') 
            ->where('equipo.nombre_completo', '!=', '""')
            ->where('categoria.slug', '!=', 'alevin')           
            ->get();

        // formateamos valores del equipo para obtener mas datos con relacion en otras tablas
        foreach ($teams as $value) {

            $objEquipo = [
                'tipo' => 'equipo',
                'idEquipo' => $value->idEquipo,
                'nombre' => $value->nombreEquipo,
                'nombreCompleto' => $value->nombreCompletoEquipo,
                'nombreCorto' => $value->nombreCortoEquipo,
                'clubId' => $value->club_id_Equipo,
                //'categoria' => HelperFunctions::categoriaClub($value->categoria_id),
                'categoria' => $value->nombreCategoria,
                'fundado' => $value->fundadoEquipo,
                'debutNacional' => $value->debut_nacional_Equipo,
                'escudo' => $value->escudoEquipo,
                'sexo' => $value->sexoEquipo,
                'slug' => $value->slugClub,
                'betsapi' => $value->betsapiEquipo,
                'codigoRFEF' => $value->codigoRFEF_Equipo,   
                'localidad' => $value->nombreLocalidad                             
            ];

            array_push($arrayEquipos, $objEquipo);
        }
        
        // Retornar la respuesta (en formato JSON)
        return response()->json(['jugadores' => $arrayJugadores, 'equipos' => $arrayEquipos]);
    }

    public function leerFichero(){

        $rutaArchivo = base_path('directos-futbolme.json');
        // Verificar si el archivo existe
        if (file_exists($rutaArchivo)) {
            // Leer el contenido del archivo JSON
            $contenidoJSON = file_get_contents($rutaArchivo);

            // Decodificar el contenido JSON a un array asociativo
            $datos = json_decode($contenidoJSON, true);

            // Hacer algo con los datos
            // Por ejemplo, devolverlos como respuesta
            return response()->json($datos);
        } else {
            // El archivo no existe
            return response()->json(['error' => 'El archivo no existe'], 404);
        }
    }
}
