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

class FichaEquipoController extends Controller
{
    public function indexEquipos($club, $id){

        $teams = DB::table('equipo')
            ->join('club', 'equipo.club_id', '=', 'club.id')
            ->join('categoria', 'equipo.categoria_id', '=', 'categoria.id')
            //->join('estadio', 'estadio.id', '=', 'equipo.estadio_id')
            //->join('estadio', 'equipo.estadio_id', '=', 'estadio.id')
            //->select(DB::raw('equipo.id AS idEquipo, equipo.nombre AS nombreEquipo, equipo.nombre_completo AS nombreCompletoEquipo, equipo.nombreCorto AS nombreCortoEquipo, equipo.club_id AS club_id_Equipo, categoria.nombre AS nombreCategoria, equipo.fundado AS fundadoEquipo, equipo.debut_nacional AS debut_nacional_Equipo, equipo.escudo AS escudoEquipo, equipo.sexo AS sexoEquipo, club.slug AS slugClub, equipo.betsapi AS betsapiEquipo, equipo.codigoRFEF AS codigoRFEF_Equipo, estadio.nombre AS nombreEstadio, estadio.direccion AS estadioDireccion, estadio.inaguracion AS estadioInauguracion, estadio.capacidad AS estadioCapacidad'))
            ->select(DB::raw('
            equipo.id AS idEquipo, 
            equipo.nombre AS nombreEquipo, 
            equipo.nombre_completo AS nombreCompletoEquipo, 
            equipo.nombreCorto AS nombreCortoEquipo, 
            equipo.club_id AS club_id_Equipo, 
            categoria.nombre AS nombreCategoria, 
            equipo.fundado AS fundadoEquipo, 
            equipo.debut_nacional AS debut_nacional_Equipo, 
            equipo.escudo AS escudoEquipo, 
            equipo.sexo AS sexoEquipo, 
            club.slug AS slugClub, 
            equipo.betsapi AS betsapiEquipo, 
            equipo.codigoRFEF AS codigoRFEF_Equipo'))
            ->where('equipo.id', '=', $id)
            ->where('equipo.slug', '!=', '""')
            ->where('club.slug', '!=', '""')
            ->where('equipo.nombre_completo', '!=', '""')             
            ->where('categoria.slug', '!=', 'alevin')           
            ->get();

        $teamProvincia = DB::table('club')
            ->join('localidad', 'club.localidad_id', '=', 'localidad.id')
            ->join('provincia', 'localidad.provincia_id', '=', 'provincia.id')
            ->select(DB::raw('provincia.nombre AS nombreProvincia'))
            ->where('club.slug', '=', $club)
            ->get();

        $teamEstadio = DB::table('estadio')
            ->join('equipo', 'estadio.id', '=', 'equipo.estadio_id')            
            ->select(DB::raw('estadio.nombre AS nombreEstadio, estadio.direccion AS estadioDireccion, estadio.inaguracion AS estadioInauguracion, estadio.capacidad AS estadioCapacidad'))
            ->where('equipo.id', '=', $id)
            ->get();

        return view('fichaEquipo', ['teams' => $teams, 'teamProvincia' => $teamProvincia, 'teamEstadio' => $teamEstadio]);        
    }
}
