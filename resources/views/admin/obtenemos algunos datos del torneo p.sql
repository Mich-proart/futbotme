--> obtenemos algunos datos del torneo para crear el select
SELECT 
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
INNER JOIN categoria ce ON tor.categoria_id=ce.id WHERE t.id= 99;

--> obtenemos datos de la jornada activa o refresh al cambiar 
SELECT 
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
WHERE p.temporada_id=99 AND p.jornada=13
ORDER BY p.fecha, p.hora_prevista

--> obtenemos los equipos de la temporada 
SELECT 
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
LEFT JOIN comunidad c ON p.comunidad_id=c.id WHERE te.temporada_id=99 ORDER BY e.nombre;

--> pestaña ascensos 
SELECT 
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
INNER JOIN categoriatorneo cat ON cat.id=a.categoria_id ORDER BY a.categoria_id, a.division_id, tor.orden, a.orden, ae.posicion;

https://api.b365api.com/v3/events/inplay?sport_id=1&token=153716-4djEyj4e6JZVou&LNG_ID=3


