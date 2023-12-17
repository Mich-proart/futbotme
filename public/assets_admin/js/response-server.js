!(function ($) {
    "use strict";
    // const socket = io("http://localhost:3000");
    // const socket_futbolme = io("http://localhost:5000");

    // socket.on("nuevos-datos", (nuevosDatos) => {
    //     console.log("Nuevos datos recibidos:", nuevosDatos);
    //     functionUpdatePartidos(nuevosDatos.results);
    //     // Aquí puedes procesar los nuevos datos como lo desees
    // });

    // socket_futbolme.on("nuevos-datos-futbolme", (nuevosDatos) => {
    //     console.log("Nuevos datos del otro fichero:", nuevosDatos);
    //     //functionUpdatePartidos(nuevosDatos.results);
    //     // Aquí puedes procesar los nuevos datos como lo desees
    // });
})(window.jQuery);

// con esta funcion updateamos base de datos y fichero json agrupadon directos para enviar al front
const functionUpdatePartidos = (data) => {
    // data es la respuesta del json original de betsapi
    console.log(data);

    // almacenamos los valores de fichero de api para enviarlos en un array
    const response_array = [];
    data.forEach((partido) => {
        const obj_response_partidos = {
            idBetsapi: partido.id,
            leagueId: partido.league.id,
            idLocal: partido.home.id,
            nombreLocal: partido.home.name,
            golesLocal: partido.ss != undefined ? partido.ss.substring(0, 1) : 0,
            idVisitante: partido.away.id,
            nombreVisitante: partido.away.name,
            golesVisitante:
                partido.ss != undefined ? partido.ss.substring(2) : 0,
        };
        response_array.push(obj_response_partidos);
    });

    // response array es el mapeo de datos que enviamos al controlador para validar la db con los match
    console.log(response_array);

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
            let result = JSON.parse(response);
            updateFrontPanelDirect(result);
        },
        complete: function () {},
    });
};

// con esta funcion updateamos los id de patidos betsapi que hicieron match con los de DB
const updateFrontPanelDirect = (data) => {
    for (const iterator of data) {
        // Accede al idBetsapi del iterador
        const idBetsapi = iterator.idBetsapi;

        // Encuentra la fila que tenga un atributo fila-idBetsapi-directo-partido que coincida con idBetsapi
        const fila = document.querySelector(`tr[tr-attr-id="${idBetsapi}"]`);

        if (fila) {
            // Modifica los elementos dentro de la fila según sea necesario
            const inputGolLocal = fila.querySelector(
                ".fila-local-gol-directo-partido"
            );
            const inputGolVisitante = fila.querySelector(
                ".fila-visitante-gol-directo-partido"
            );
            // ... y así sucesivamente con los elementos que necesites modificar

            // Por ejemplo, si quieres modificar el valor de los inputs
            if (inputGolLocal) {
                inputGolLocal.value = iterator.golesLocal; // Suponiendo que fecha es un campo en el iterador
            }
            if (inputGolVisitante) {
                inputGolVisitante.value = iterator.golesVisitante; // Suponiendo que horaPrevista es un campo en el iterador
            }
        }
    }
};
