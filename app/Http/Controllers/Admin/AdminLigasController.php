<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// modelos
use App\Models\Torneo;

class AdminLigasController extends Controller
{
    // index
    public function indexLigas(){

        // $teams = DB::table('equipo')
        // ->join('club', 'equipo.club_id', '=', 'club.id')
        // ->join('categoria', 'equipo.categoria_id', '=', 'categoria.id')
        // ->join('estadio', 'equipo.estadio_id', '=', 'estadio.id')
        // ->select(DB::raw('equipo.id AS idEquipo, equipo.nombre AS nombreEquipo, equipo.nombre_completo AS nombreCompletoEquipo, equipo.nombreCorto AS nombreCortoEquipo, equipo.club_id AS club_id_Equipo, categoria.nombre AS nombreCategoria, equipo.fundado AS fundadoEquipo, equipo.debut_nacional AS debut_nacional_Equipo, equipo.escudo AS escudoEquipo, equipo.sexo AS sexoEquipo, club.slug AS slugClub, equipo.betsapi AS betsapiEquipo, equipo.codigoRFEF AS codigoRFEF_Equipo, estadio.nombre AS nombreEstadio, estadio.direccion AS estadioDireccion, estadio.inaguracion AS estadioInauguracion, estadio.capacidad AS estadioCapacidad'))
        // ->where('equipo.id', '=', $id)
        // ->where('equipo.slug', '!=', '""')
        // ->where('club.slug', '!=', '""')
        // ->where('equipo.nombre_completo', '!=', '""') 
        // ->where('equipo.nombre_completo', '!=', '""')
        // ->where('categoria.slug', '!=', 'alevin')           
        // ->get();

        $resultados = Torneo::select('temporada.id', 'torneo.nombre', 'torneo.pais_id', 'torneo.comunidad_id', 'torneo.apuestaMA', 'pais.nombre as nombrePais', 'torneo.categoria_torneo_id', 'torneo.apifutbol_tipo', 'comunidad.nombre as nombreComunidad', 'torneo.betsapi', 'liga.jornadas', 'liga.jornadaActiva')
        ->join('temporada', 'temporada.torneo_id', '=', 'torneo.id')
        ->join('pais', 'pais.id', '=', 'torneo.pais_id')
        ->join('comunidad', 'comunidad.id', '=', 'torneo.comunidad_id')
        ->join('liga', 'liga.id', '=', 'torneo.id')
        ->where('torneo.tipo_torneo', 1)
        ->where('torneo.visible', '>', 3)
        ->where('torneo.categoria_torneo_id', 1)
        ->orderBy('torneo.apuestaMA', 'desc')
        ->orderBy('torneo.categoria_torneo_id')
        ->orderBy('torneo.comunidad_id')
        ->orderBy('torneo.orden')
        ->get();

        return view('admin.liga')->with('resultados', $resultados);
    }
}