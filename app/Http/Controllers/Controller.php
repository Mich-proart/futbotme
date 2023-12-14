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
            /* equipos del torneo */
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

            /* Info principal de torneo o liga */

            $Info = DB::select("SELECT 
            t.torneo_id,
            tor.tipo_torneo, 
            tor.betsapi,
            tor.nombre, 
            tor.traduccion,
            tor.sexo, 
            tor.desarrollo, 
            tor.categoria_id, ce.nombre categoria_nombre,
            tor.visible,
            tor.categoria_torneo_id, 
            tor.id_original,
            tor.apifutbol,
            tor.apiRFEFcompeticion,
            tor.apiRFEFgrupo,
            tor.whatsapp,
            tor.whatsapp_url,
            pa.id idPais, 
            pa.nombre nombrePais,
            co.id idComunidad, 
            co.nombre nombreComunidad, 
            CASE WHEN (tor.tipo_torneo=1) THEN (select jornadas from liga where id=tor.id) 
            ELSE 0 END as jornadas,
            CASE WHEN (tor.tipo_torneo=1) THEN (select jornadaActiva from liga where id=tor.id) 
            ELSE (select fase_activa from eliminatorio where id=tor.id)  END as jornadaActiva,
            CASE WHEN (tor.tipo_torneo=1) THEN (select tipoClasificacion from liga where id=tor.id) 
            ELSE 0 END as tipoClasificacion,
            CASE WHEN (tor.tipo_torneo=1) THEN (select tipoPuntuacion from liga where id=tor.id) 
            ELSE 0 END as tipoPuntuacion
            FROM temporada t
            INNER JOIN torneo tor ON t.torneo_id=tor.id
            INNER JOIN pais pa ON tor.pais_id=pa.id
            INNER JOIN comunidad co ON tor.comunidad_id=co.id
            INNER JOIN categoria ce ON tor.categoria_id=ce.id WHERE t.id=$id");
        }

        return view('categories', ['nombre' => $nombre, 'equipos' => $equipos, 'info' => $Info]);
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
