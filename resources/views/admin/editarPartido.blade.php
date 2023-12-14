@extends('layouts.app')

@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <h1 class="text-center">
                {{ $dataEquipoLocal[0]->nombreCorto }} ({{ $datosPartido[0]->goles_local }}) vs
                ({{ $datosPartido[0]->goles_visitante }}) {{ $dataEquipoVisitante[0]->nombreCorto }}
            </h1>

            montar formas de updatear gol por medio de directos y por medio <br>
            de ligas y torneos
            <br><br><br>
            datos para agregar gol IdPartido,Idtemporada
            <br>
            <ul>
                <li>Gol equipoA David Soria Solís minuto 30', observación Una</li>
                <li>Gol equipoB David Soria Solís minuto 40', observación Dos</li>
                <li>Gol equipoC David Soria Solís minuto 10', observación Una</li>
            </ul>
            <table width="100%" bgcolor="gainsboro">
                <tbody>
                    <tr>
                        <td align="left">
                            <div class="mb-3">
                                <span style="cursor:pointer; color: maroon;vertical-align: top;" class="boldfont">Jugador</span>
                                <br>
                                <select class="">
                                    @foreach ($plantillaLocal as $jugador)
                                        <option value="{{ $jugador->id }}">{{ ($jugador->apodo) }} - {{ $jugador->nombre }} {{ $jugador->apellidos }}</option>
                                    @endforeach
                                    @foreach ($plantillaVisitante as $jugador)
                                        <option value="{{ $jugador->id }}">{{ ($jugador->apodo) }} {{ $jugador->nombre }} {{ $jugador->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </td>
                        <td align="left">
                            <div class="mb-3">
                                <span style="cursor:pointer; color: maroon;vertical-align: top;" class="boldfont">minuto</span>
                                <input name="minuto" size="2">
                            </div>
                        </td>
                        <td align="left">
                            <div class="mb-3">
                                <span style="cursor:pointer; color: maroon;vertical-align: top;" class="boldfont">tipo</span>
                                <select name="tipo">
                                    <option value="0">jugada</option>
                                    <option value="1">penalti</option>
                                    <option value="10">propia puerta</option>
                                    <option value="11">penalti fallado</option>
                                </select>
                            </div>
                        </td>
                        <td align="left">
                            <div class="mb-3">
                                <span style="cursor:pointer; color: maroon;vertical-align: top;" class="boldfont">esLocal</span>
                                <input type="checkbox" name="" id="">
                            </div>
                        </td>
                        <td align="left">
                            <div class="mb-3">
                                <span style="cursor:pointer; color: maroon;vertical-align: top;" class="boldfont">observaciones</span>
                                <textarea name=""></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <button class="btn btn-primary my-2">Agregar gol</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row pb-3">
                <div class="col-12 mt-2">
                    {{-- http://localhost:8000/admin-panel/torneo/216/5361/188 --> no resolve --}}

                    {{-- consulta front ascensos
                    $consulta = 'SELECT a.id, a.categoria_id, a.division_id, a.nombre, a.orden, ae.equipo_id, ae.ascenso_id, ae.posicion, ae.temporada_id, e.nombre equipo, e.club_id, cat.nombre categoria, t.nombre temporada
                    FROM ascenso a
                    INNER JOIN ascensoequipo ae ON a.id=ae.ascenso_id
                    INNER JOIN equipo e ON e.id=ae.equipo_id
                    INNER JOIN temporada t ON t.id=ae.temporada_id
                    INNER JOIN torneo tor ON tor.id=t.torneo_id
                    INNER JOIN categoriatorneo cat ON cat.id=a.categoria_id
                    ORDER BY a.categoria_id, a.division_id, tor.orden, a.orden, ae.posicion'; --}}



                    {{-- para obtener todos los torneos  --}}
                    {{-- SELECT t.id, t.nombre, te.id as temporada_id FROM torneo t INNER JOIN temporada te ON te.torneo_id=t.id WHERE t.visible>4; --}}


                    {{-- <br><br><br><br><br><br> --}}

                    <?php        
                    
                    $temporada_id = 99;

                    $jornadaActiva = 13;

                    $campos = "p.id, p.partidoAPI,
                    p.temporada_id,
                    p.estado_partido, 
                    p.jornada,
                    p.apuesta apuesta_partido,
                    fa.nombre fase,  
                    p.fecha, 
                    p.hora_prevista, 
                    p.hora_real,
                    p.apuesta,
                    p.clasificado, 
                    p.goles_local,
                    p.goles_visitante,
                    p.grupo_id, p.betsapi, p.codigo_acta,
                    ec.nombre local, ec.nombreCorto localCorto, ec.slug twitterLocal, ec.federacion_id federacion_id_l,
                    p.equipoLocal_id, cec.pais_id pais_local, cef.pais_id pais_visitante, ef.federacion_id federacion_id_v,
                    ef.nombre visitante, ef.nombreCorto visitanteCorto, ef.slug twitterVisitante,
                    p.equipoVisitante_id,
                    p.observaciones, p.comentario, cec.id club_local, cef.id club_visitante,
                    p.estadio, p.arbitro_id,p.youtube_id, p.acta, tor.apuesta apuesta_torneo, 
                    tor.tipo_torneo, tor.pais_id idPais, tor.visible, (SELECT count(id) FROM gol WHERE partido_id=p.id) goles,e.id estadio_id, e.nombre estadio_nombre, l.nombre estadio_localidad,
                    (SELECT GROUP_CONCAT(DISTINCT medio_id SEPARATOR '-') FROM partido_medio WHERE partido_id=p.id) tv,
                    (SELECT CONCAT(apellidos,',',nombre) FROM arbitro WHERE id=p.arbitro_id) nombre_arbitro";
                            if (442 != $temporada_id && 231 != $temporada_id) {
                                $campos .= ",
                    (select concat(p2.goles_local,',',p2.goles_visitante,',',p2.jornada,',', p2.fecha,',', p2.id,',',
                                    (SELECT tipo_torneo FROM torneo WHERE id=(SELECT torneo_id FROM temporada WHERE id=p2.temporada_id))
                        ) FROM partido p2 
                    WHERE p2.equipoLocal_id=p.equipoVisitante_id AND p2.equipoVisitante_id=p.equipoLocal_id AND p2.temporada_id=p.temporada_id AND p2.estado_partido=1 AND p2.grupo_id IS NULL LIMIT 1) as ida ";
                            }
                    
                            $tabla = 'partido p';
                    
                            $union = ' INNER JOIN equipo ec ON p.equipoLocal_id=ec.id';
                            $union .= ' INNER JOIN equipo ef ON p.equipoVisitante_id=ef.id';
                            $union .= ' INNER JOIN club cec ON ec.club_id=cec.id';
                            $union .= ' INNER JOIN club cef ON ef.club_id=cef.id';
                            $union .= ' INNER JOIN fase fa ON p.jornada=fa.id';
                            $union .= ' INNER JOIN temporada te ON p.temporada_id=te.id';
                            $union .= ' INNER JOIN torneo tor ON te.torneo_id=tor.id';
                            $union .= ' LEFT JOIN estadio e ON e.id=ec.estadio_id';
                            $union .= ' LEFT JOIN localidad l ON l.id=e.localidad_id';
                    
                            if (0 == $jornadaActiva) {
                                $condicion = ' WHERE p.temporada_id='.$temporada_id;
                            } else {
                                if (442 == $temporada_id || 231 == $temporada_id) {
                                    $condicion = " WHERE p.fecha>'2017-06-27' AND p.temporada_id=".$temporada_id.' AND p.jornada='.$jornadaActiva;
                                } else {
                                    $condicion = ' WHERE p.temporada_id='.$temporada_id.' AND p.jornada='.$jornadaActiva;
                                }
                            }
                    
                            if (442 == $temporada_id || 231 == $temporada_id) {
                                $orden = ' ORDER BY p.fecha DESC, p.hora_prevista';
                            } else {
                                $orden = ' ORDER BY p.jornada, p.grupo_id, p.fecha, p.hora_prevista';
                            }
                    
                            $consulta = 'SELECT '.$campos.' FROM '.$tabla.$union.$condicion.$orden; ?>


<?php //var_dump($consulta);?>


<?php 
$temporada_id = 99;
$consulta = 'SELECT a.id, a.categoria_id, a.division_id, a.nombre, a.orden, ae.equipo_id, ae.ascenso_id, ae.posicion, ae.temporada_id, e.nombre equipo, e.club_id, cat.nombre categoria, t.nombre temporada
        FROM ascenso a
        INNER JOIN ascensoequipo ae ON a.id=ae.ascenso_id
        INNER JOIN equipo e ON e.id=ae.equipo_id
        INNER JOIN temporada t ON t.id=ae.temporada_id
        INNER JOIN torneo tor ON tor.id=t.torneo_id
        INNER JOIN categoriatorneo cat ON cat.id=a.categoria_id
        ORDER BY a.categoria_id, a.division_id, tor.orden, a.orden, ae.posicion';

        //var_dump($consulta);
?>









                    <span class="">Observaciones partido</span>
                    <textarea class="w-100 my-2" name="" rows="10">{{ $datosPartido[0]->observaciones }}</textarea>
                </div>
                @foreach ($medios as $medio)
                    <div class="col-lg-2 col12">
                        <div class="form-check">
                            <input class="form-check-input" <?php if (intval($medio->id) === intval($medioPartido[0]->medio_id)) {
                                echo 'checked';
                            } else {
                                echo '';
                            } ?> type="checkbox" value=""
                                id="medio-{{ $medio->slug }}">
                            <label class="form-check-label" for="medio-{{ $medio->slug }}">
                                {{ $medio->nombre }}
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="btn btn-primary btn-block my-2">Guardar</button>
        </div>
    </div> <!-- end row-->
@endsection
