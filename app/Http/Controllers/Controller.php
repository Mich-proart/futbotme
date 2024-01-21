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
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use Stevebauman\Location\Facades\Location;
use GuzzleHttp\Client;

class Controller extends BaseController
{

    /* FUNCION PARA BUSCAR EL CODIGO DE PAIS POR MEDIO DEL NOMBRE DEL PAIS */
    public function obtenerCodigoPais($pnombrepais)
    {
        try {
            // Llamada a la API para obtener información del país por nombre
            if ($pnombrepais == 'Chipre') {
                $nombrepais = 'Cyprus';
            } elseif ($pnombrepais == 'Polonia') {
                $nombrepais = 'Poland';
            } elseif ($pnombrepais == 'Bosnia y Herzegovina') {
                $nombrepais = 'Bosnia and Herzegovina';
            } elseif ($pnombrepais == 'Azerbaiyán') {
                $nombrepais = 'Azerbaijan';
            } elseif ($pnombrepais == 'Grecia') {
                $nombrepais = 'Greece';
            } elseif ($pnombrepais == 'Inglaterra') {
                $nombrepais = 'United Kingdom';
            } else {
                $nombrepais = $pnombrepais;
            }
            $response = Http::get('https://restcountries.com/v2/name/' . $nombrepais);

            // Verificar si la solicitud fue exitosa
            if ($response->successful()) {
                $data = $response->json();

                // Obtener el código de país (alpha-2 code)
                $pais = $data[0]['flag'];
            } else {
                // Manejar el caso en que la solicitud no fue exitosa
                $pais = 'https://flagcdn.com/eu.svg';
            }
        } catch (\Exception $e) {
            // Manejar cualquier excepción que pueda ocurrir durante la solicitud
            $pais = 'https://flagcdn.com/un.svg';
        }

        // Retornar el código del país
        return $pais;
    }

    public function index()
    {

        // importamos los directos modificados y ordenados por competicion order by ASC
        $directosFhicheroJson = AdminController::obtener_directos_agrupados_competicion();
        $partidosPorJugarCurDate = AdminController::get_partidos_curtdate(0, HelperFunctions::get_fecha_current_generic());
        $partidosEnJuegoCurDate = AdminController::get_partidos_curtdate(2, HelperFunctions::get_fecha_current_generic());
        $partidosTerminadosCurDate = AdminController::get_partidos_curtdate(1, HelperFunctions::get_fecha_current_generic());
        /* // Realizar la solicitud a ipstack
        $apiKey = '74ceba1835ce5771f6b2e37f3011d886'; // Obtén tu clave API registrándote en ipstack.com
        $ip = request()->ip(); // Obtiene la dirección IP del usuario

        $client = new Client();
        $response = $client->get("http://api.ipstack.com/{$ip}?access_key={$apiKey}");
        $userLocation = json_decode($response->getBody()); */
        
        // Realizar la solicitud a ipinfo.io
        $accessToken = '96d2dea2d00c58'; // Obtén tu token de acceso registrándote en ipinfo.io
        $ip = request()->ip(); // Obtiene la dirección IP del usuario

        $client = new Client();
        $response = $client->get("http://ipinfo.io/{$ip}?token={$accessToken}");
        $userLocation = json_decode($response->getBody());



        // retornamos los datos de directo DB, finalizados DB, por Jugar DB
        return view('welcome', [
            'directos' => $directosFhicheroJson,
            'partidosPorJugarCurDate' => $partidosPorJugarCurDate,
            'partidosEnJuegoCurDate' => $partidosEnJuegoCurDate,
            'partidosTerminadosCurDate' => $partidosTerminadosCurDate,
            'userLocation' => $userLocation
        ]);
    }



    public function indexCategorias(Request $request, $nombre, $id = null, $tabs = null)
    {

        if (!is_null($id)) {

            $goleadores = DB::select("SELECT COUNT(g.id) AS goles, g.jugador_id, j.apodo AS jugador, e.nombre AS equipo, e.id AS equipo_id, e.nombreCorto AS equipoCorto
            FROM gol g
            INNER JOIN jugador j ON g.jugador_id = j.id
            INNER JOIN equipo e ON j.equipoActual_id = e.id
            WHERE g.temporada_id = $id AND g.tipo < 10
            GROUP BY e.id, g.jugador_id, j.apodo, e.nombre, e.nombreCorto
            ORDER BY COUNT(g.id) DESC;");

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

            $torneo_Liga = $Info[0];
            $INFO_PAIS = $Info[0];
            $CC_Pais = $this->obtenerCodigoPais($INFO_PAIS->nombrePais);
            $JActiva = $INFO_PAIS->jornadaActiva;

            /* OBTENEMOS JORNADA ACTIVA */

            $JornadaActiva = DB::select("SELECT 
            ct.id as categoria_id, ct.orden as categoria_orden, 
            ct.nombre as categoria_nombre, 
            tor.id as torneo_id, 
            tor.orden as torneo_orden, 
            tor.nombre as torneo_nombre, 
            tor.division_id, 
            co.id as comunidad_id, 
            co.nombre as comunidad_nombre, 
            pa.id as pais_id, 
            pa.nombre as pais_nombre,
            p.id as partido_id, 
            p.estado_partido, 
            p.temporada_id, 
            p.fecha, 
            p.arbitro_id, 
            p.hora_prevista, 
            p.hora_real, 
            p.goles_local, 
            p.goles_visitante, 
            p.jornada, 
            p.clasificado, 
            p.observaciones, 
            p.estadio, 
            p.partidoAPI, 
            p.comentario, 
            p.equipoLocal_id, 
            ec.nombre as local, 
            ec.nombreCorto ncLocal, 
            ec.slug twLocal, 
            ec.betsapi betsapiL, 
            (select comunidad_id from provincia where id= (select provincia_id from localidad where id=(select localidad_id from club where id=ec.club_id) ) ) comunidad_local, 
            (select nombre from comunidad where id= (select comunidad_id from provincia where id= (select provincia_id from localidad where id=(select localidad_id from club where id=ec.club_id) ) ) ) comunidad_local_nombre, 
            (select pais_id from club where id=ec.club_id) pais_local, 
            (select nombre from pais where id=(select pais_id from club where id=ec.club_id)) pais_local_nombre, 
            p.equipoVisitante_id, 
            ef.nombre visitante, 
            ef.nombreCorto ncVisitante, 
            ef.slug twVisitante, 
            ef.betsapi betsapiV, 
            (select comunidad_id from provincia where id= (select provincia_id from localidad where id=(select localidad_id from club where id=ef.club_id) ) ) comunidad_visitante,
            (select nombre from comunidad where id= (select comunidad_id from provincia where id= (select provincia_id from localidad where id=(select localidad_id from club where id=ef.club_id) ) ) ) comunidad_visitante_nombre,
            (select pais_id from club where id=ef.club_id) pais_visitante, 
            (select nombre from pais where id=(select pais_id from club where id=ef.club_id)) pais_visitante_nombre, 
            p.usuario_id, 
            (select count(id) from medio where partido_id=p.id) medios, 
            p.youtube_id, p.betsapi 
            FROM partido p 
            INNER JOIN equipo ec ON ec.id=p.equipoLocal_id 
            INNER JOIN equipo ef ON ef.id=p.equipoVisitante_id 
            INNER JOIN temporada te ON te.id=p.temporada_id 
            INNER JOIN torneo tor ON tor.id=te.torneo_id 
            INNER JOIN comunidad co ON co.id=tor.comunidad_id 
            INNER JOIN pais pa ON pa.id=tor.pais_id 
            INNER JOIN categoriatorneo ct ON ct.id=tor.categoria_torneo_id 
            WHERE p.temporada_id=$id AND p.jornada=$JActiva
            ORDER BY p.fecha, p.hora_prevista");


            // Ordena el array por fecha y hora descendente
            $JornadaActiva = collect($JornadaActiva)->sortByDesc(function ($partido) {
                return $partido->fecha . ' ' . $partido->hora_prevista;
            })->values()->all();

            return view('categories', [
                'nombre' => $nombre,
                'equipos' => $equipos,
                'torneo_Liga' => $torneo_Liga,
                'JornadaActiva' => $JornadaActiva,
                'ID_TL' => $id,
                'CC_Pais' => $CC_Pais,
                'goleadores' => $goleadores,
            ]);
        }
    }


    public function actualizarJornada(Request $request)
    {


        // Obtener el nuevo valor de JActiva desde la solicitud Ajax
        $nuevoJActiva = $request->input('nuevoJActiva');

        $id = $request->input('id');

        // Actualizar la variable $JActiva con el nuevo valor
        $JActiva = $nuevoJActiva;

        // Obtener información de la jornada activa
        $jornadaActivaData = DB::select("SELECT 
        ct.id as categoria_id, ct.orden as categoria_orden,
        ct.nombre as categoria_nombre,
        tor.id as torneo_id,
        tor.orden as torneo_orden,
        tor.nombre as torneo_nombre,
        tor.division_id,
        co.id as comunidad_id,
        co.nombre as comunidad_nombre,
        pa.id as pais_id,
        pa.nombre as pais_nombre,
        p.id as partido_id,
        p.estado_partido,
        p.temporada_id,
        p.fecha,
        p.arbitro_id,
        p.hora_prevista,
        p.hora_real,
        p.goles_local,
        p.goles_visitante,
        p.jornada,
        p.clasificado,
        p.observaciones,
        p.estadio,
        p.partidoAPI,
        p.comentario,
        p.equipoLocal_id,
        ec.nombre as local,
        ec.nombreCorto ncLocal,
        ec.slug twLocal,
        ec.betsapi betsapiL,
        (select comunidad_id from provincia where id= (select provincia_id from localidad where id=(select localidad_id from club where id=ec.club_id) ) ) comunidad_local,
        (select nombre from comunidad where id= (select comunidad_id from provincia where id= (select provincia_id from localidad where id=(select localidad_id from club where id=ec.club_id) ) ) ) comunidad_local_nombre,
        (select pais_id from club where id=ec.club_id) pais_local,
        (select nombre from pais where id=(select pais_id from club where id=ec.club_id)) pais_local_nombre,
        p.equipoVisitante_id,
        ef.nombre visitante,
        ef.nombreCorto ncVisitante,
        ef.slug twVisitante,
        ef.betsapi betsapiV,
        (select comunidad_id from provincia where id= (select provincia_id from localidad where id=(select localidad_id from club where id=ef.club_id) ) ) comunidad_visitante,
        (select nombre from comunidad where id= (select comunidad_id from provincia where id= (select provincia_id from localidad where id=(select localidad_id from club where id=ef.club_id) ) ) ) comunidad_visitante_nombre,
        (select pais_id from club where id=ef.club_id) pais_visitante,
        (select nombre from pais where id=(select pais_id from club where id=ef.club_id)) pais_visitante_nombre,
        p.usuario_id,
        (select count(id) from medio where partido_id=p.id) medios,
        p.youtube_id, p.betsapi
    FROM partido p
    INNER JOIN equipo ec ON ec.id=p.equipoLocal_id
    INNER JOIN equipo ef ON ef.id=p.equipoVisitante_id
    INNER JOIN temporada te ON te.id=p.temporada_id
    INNER JOIN torneo tor ON tor.id=te.torneo_id
    INNER JOIN comunidad co ON co.id=tor.comunidad_id
    INNER JOIN pais pa ON pa.id=tor.pais_id
    INNER JOIN categoriatorneo ct ON ct.id=tor.categoria_torneo_id
    WHERE p.temporada_id = ? AND p.jornada = ?
    ORDER BY p.fecha, p.hora_prevista", [$id, $JActiva]);

        // Ordenar el array por fecha y hora descendente
        $jornadaActivaData = collect($jornadaActivaData)->sortByDesc(function ($partido) {
            return $partido->fecha . ' ' . $partido->hora_prevista;
        })->values()->all();

        // Devolver la vista parcial con los datos actualizados
        return view('partials.actualizar-jornada', compact('jornadaActivaData'));
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
