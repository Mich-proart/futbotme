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
            ->select(DB::raw('equipo.id AS idEquipo, equipo.nombre AS nombreEquipo, equipo.nombre_completo AS nombreCompletoEquipo, equipo.nombreCorto AS nombreCortoEquipo, equipo.club_id AS club_id_Equipo, categoria.nombre AS nombreCategoria, equipo.fundado AS fundadoEquipo, equipo.debut_nacional AS debut_nacional_Equipo, equipo.escudo AS escudoEquipo, equipo.sexo AS sexoEquipo, club.slug AS slugClub, equipo.betsapi AS betsapiEquipo, equipo.codigoRFEF AS codigoRFEF_Equipo'))
            ->where('club.slug', '=', $club)
            ->where('equipo.slug', '!=', '""')
            ->where('club.slug', '!=', '""')
            ->where('equipo.nombre_completo', '!=', '""') 
            ->where('equipo.nombre_completo', '!=', '""')
            ->where('categoria.slug', '!=', 'alevin')           
            ->get();

        return view('fichaEquipo', ['teams' => $teams]);
    }
}
