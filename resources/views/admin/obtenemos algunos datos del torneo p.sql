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


https://api.b365api.com/v3/events/inplay?sport_id=1&token=153716-4djEyj4e6JZVou&LNG_ID=3


