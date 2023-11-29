!(function ($) {
    "use strict";
    const socket = io("http://localhost:3000");

    socket.on("json-data", (datos) => {
        console.log("Datos JSON recibidos:", datos);
        // Aquí puedes procesar los datos como lo desees
        functionUpdatePartidos(datos.results)

    });

    socket.on("nuevos-datos", (nuevosDatos) => {
        console.log("Nuevos datos recibidos:", nuevosDatos);
        functionUpdatePartidos(nuevosDatos.results)
        // Aquí puedes procesar los nuevos datos como lo desees
    });
})(window.jQuery);

// con esta funcion updateamos base de datos y fichero json agrupadon directos para enviar al front
const functionUpdatePartidos = (data) => {

    console.log(data)

    // almacenamos los valores de fichero de api para enviarlos en un array
    const response_array = []
    data.forEach(partido => {
        const obj_response_partidos = {
            'idBetsapi' : partido.id,
            'leagueId' : partido.league.id,
            'idLocal' : partido.home.id,
            'nombreLocal' : partido.home.name,
            'golesLocal' : partido.ss.substring(0,1),
            'idVisitante' : partido.away.id,
            'nombreVisitante' : partido.away.name,
            'golesVisitante' : partido.ss.substring(2),
        }
        response_array.push(obj_response_partidos)
    });

    jQuery.ajax({
        url: `${urlBase}admin-panel/update-partido-automatic/`,
        type: "POST",
        data: {
            response_array,
        },
        headers: {
            "X-CSRF-TOKEN": csrfToken,
        },
        beforeSend: function () {},
        success: function (response) {
            console.log(response);
            // let result = JSON.parse(response);
            // if (result == 'guardado') {
            //     alertFeed('alert-success', 'Guardado exitoso')
            // }else{
            //     alertFeed('alert-danger', 'Error al guardar')
            // }
        },
        complete: function () {
        },
    });
};
