<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

// importamos funciones externas
use Carbon\Carbon;
use App\Http\Controllers\Admin\AdminController;
use App\Helpers\HelperFunctions;

class Controller extends BaseController
{

    public function index()
    {

        // importamos los directos modificados y ordenados por competicion order by ASC
        $directosFhicheroJson = AdminController::obtener_directos_agrupados_competicion();
        $partidosPorJugarCurDate = AdminController::get_partidos_curtdate(0, HelperFunctions::get_fecha_current_generic());
        $partidosEnJuegoCurDate = AdminController::get_partidos_curtdate(2, HelperFunctions::get_fecha_current_generic());
        $partidosTerminadosCurDate = AdminController::get_partidos_curtdate(1, HelperFunctions::get_fecha_current_generic());

        // retornamos los datos de directo DB, finalizados DB, por Jugar DB
        return view('welcome', [
            'directos' => $directosFhicheroJson,
            'partidosPorJugarCurDate' => $partidosPorJugarCurDate,
            'partidosEnJuegoCurDate' => $partidosEnJuegoCurDate,
            'partidosTerminadosCurDate' => $partidosTerminadosCurDate
        ]);
    }

    public function indexCategorias($nombre, $id = null)
    {

        if (!is_null($id)) {
            // Hacer algo con $id
            $equipos = DB::select("SELECT 
            te.equipo_id, 
            te.grupo, 
            e.nombre, 
            e.nombreCorto, 
            e.estadio_id, 
            e.betsapi, 
            e.club_id, 
            e.equipacion_id, 
            e.slug, 
            l.id localidad_id, 
            p.id provincia_id, 
            c.id comunidad_id, 
            l.nombre localidad, 
            p.nombre provincia, 
            c.nombre comunidad, 
            cl.pais_id, 
            cl.es_seleccion 
            FROM temporada_equipo te 
            INNER JOIN equipo e ON te.equipo_id=e.id 
            INNER JOIN club cl ON e.club_id=cl.id 
            LEFT JOIN localidad l ON cl.localidad_id=l.id 
            LEFT JOIN provincia p ON l.provincia_id=p.id 
            LEFT JOIN comunidad c ON p.comunidad_id=c.id WHERE te.temporada_id=$id ORDER BY e.nombre;");
        }

        return view('categories', ['nombre' => $nombre, 'equipos' => $equipos]);
    }

    public function indexCategoriasAscenso($nacional)
    {

        $datos = DB::select("SELECT 
        a.id, 
        a.categoria_id, 
        a.division_id, 
        a.nombre, a.orden, 
        ae.equipo_id, 
        ae.ascenso_id, 
        ae.posicion, 
        ae.temporada_id, 
        e.nombre equipo, 
        e.club_id, 
        cat.nombre categoria, 
        t.nombre temporada 
        FROM ascenso a 
        INNER JOIN ascensoequipo ae ON a.id=ae.ascenso_id 
        INNER JOIN equipo e ON e.id=ae.equipo_id 
        INNER JOIN temporada t ON t.id=ae.temporada_id 
        INNER JOIN torneo tor ON tor.id=t.torneo_id 
        INNER JOIN categoriatorneo cat ON cat.id=a.categoria_id ORDER BY a.categoria_id, a.division_id, tor.orden, a.orden, ae.posicion");

        $datosOrganizados = collect($datos)->groupBy('categoria')->map(function ($categorias) {
            return $categorias->groupBy('temporada')->map(function ($temporadas) {
                return $temporadas->sortBy('id')->groupBy('id')->map(function ($items) {
                    return $items->sortBy('posicion');
                });
            });
        });
        return view('ascensosydecensos', ['nombre' => $nacional, 'datos' => $datosOrganizados]);
    }
}
