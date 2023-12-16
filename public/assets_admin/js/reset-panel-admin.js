!(function ($) {
    "use strict";

    jQuery(".btn-forzar-estados").on("click", function () {
        getEachStatusFootballSoccer();
    });

    jQuery("#fixed-columns-datatable").on("page.dt", function () {
        getEachStatusFootballSoccer();
    });

    // setInterval(() => {
    //     getEachStatusFootballSoccer();
    // }, 1000);

})(window.jQuery);

const getEachStatusFootballSoccer = () => {
    jQuery.ajax({
        url: `${urlBase}admin-panel/update-status-football-soccer/`,
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": csrfToken,
        },
        beforeSend: function () {},
        success: function (response) {
            console.log(response);
        },
        complete: function () {},
    });

    // Obtener la hora actual
    // let fechaActual = new Date();
    // let horaActual = fechaActual.getHours() + ":" + fechaActual.getMinutes() + ":" + fechaActual.getSeconds();
    // let table = jQuery("#fixed-columns-datatable").DataTable();
    // // Obtener los datos de la página actual
    // let currentPageData = table.rows({ page: "current" }).data().toArray();
    // currentPageData.forEach(function (row) {
    //     let horaFila = jQuery(row[3]).find(
    //         ".fila-hora-directo-partido-prevista"
    //     ).prevObject[0].value;
    //     let filaIdDirectoPartido = jQuery(row[1]).find(
    //         ".fila-id-directo-partido"
    //     ).prevObject[0].childNodes[0].data;
    //verifyInFileDirecto(filaIdDirectoPartido, horaActual, horaFila);
    // });

    //verifyInFileDirecto();
};

//const verifyInFileDirecto = (idVerify, horaActual, horaFila) => {
//const verifyInFileDirecto = () => {
// if (parseInt(idVerify) != -1) {
//     if (horaActual < horaFila) {
//         console.log(`ponemos el partido ${idVerify} en estado no jugado`);
//         // (parseInt(idVerify) != -1) && console.log('id en verify: ', idVerify);
//     }
//     {
//         leerFicheroJson(idVerify);
//         //console.log(`aqui verificamos si esta en juego o no`)
//     }
// }
//};

// const leerFicheroJson = (idVerify) => {
//     jQuery.ajax({
//         url: `${urlBase}admin-panel/update-status-football-soccer/`,
//         type: "POST",
//         data: {
//             idVerify,
//         },
//         headers: {
//             "X-CSRF-TOKEN": csrfToken,
//         },
//         beforeSend: function () {
//             // $(".spiner-competiciones").fadeIn();
//             // $(acordion).html("");
//         },
//         success: function (response) {
//             console.log(response)
//             // Suponiendo que tienes la respuesta de la llamada AJAX en 'respuestaAjax'
//             //var respuestaAjax = 1; // Esto es un ejemplo, debes reemplazarlo con tu valor real obtenido de la respuesta AJAX

//             // Encuentra el elemento select por su clase
//             // var selectElement = document.querySelector(
//             //     ".fila-estado-directo-partido"
//             // );

//             // Itera sobre las opciones y selecciona la que coincide con 'respuestaAjax'
//             // for (var i = 0; i < selectElement.options.length; i++) {
//             //     if (
//             //         selectElement.options[i].value === respuestaAjax.toString()
//             //     ) {
//             //         selectElement.selectedIndex = i; // Selecciona la opción que coincide con la respuesta AJAX
//             //         break;
//             //     }
//             // }

//             //console.log(response);
//             //let result = JSON.parse(response);
//             // //console.log(result);
//             // for (const iterator of result) {
//             //     console.log(iterator);
//             // }
//             // $(acordion).append(result)
//         },
//         complete: function () {
//             // $(".spiner-competiciones").fadeOut();
//         },
//     });
// };
