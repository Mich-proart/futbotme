// Objeto para almacenar los intervalId asociados a cada fila
// const intervalIds = {};

// // funcion con el que detenemos el reloj
// // const detenerReloj = (index) => {
// //     clearInterval(intervalIds[index]);
// //     delete intervalIds[index];
// // };

// // funcion con la que iniciamos el reloj por partido
// const iniciarReloj = (horaPartido, inputFila) => {
//     const index = $(".fila-directos-partido").index(inputFila);
//     const intervalId = setInterval(() => {
//         // Hora de inicio del partido (en formato HH:mm)
//         var horaInicio = horaPartido;

//         // Obtener la hora actual
//         var ahora = new Date();
//         var horaActual = ahora.getHours();
//         var minutosActuales = ahora.getMinutes();
//         var segundosActuales = ahora.getSeconds();

//         // Convertir la hora de inicio y la hora actual a segundos
//         var horaInicioArray = horaInicio.split(":");
//         var segundosInicio =
//             parseInt(horaInicioArray[0]) * 3600 +
//             parseInt(horaInicioArray[1]) * 60;
//         var segundosActualesTotal =
//             horaActual * 3600 + minutosActuales * 60 + segundosActuales;

//         // Calcular la diferencia en segundos
//         var segundosTranscurridos = segundosActualesTotal - segundosInicio;

//         // Calcular minutos y segundos
//         var minutosTranscurridos = Math.floor(segundosTranscurridos / 60);
//         var segundosRestantes = segundosTranscurridos % 60;

//         // agregamos 0 a los minutos que son menores que dies
//         minutosTranscurridos =
//             minutosTranscurridos < 10
//                 ? "0" + minutosTranscurridos
//                 : minutosTranscurridos;

//         // agregamos 0 a los segundos menores que diez
//         segundosRestantes =
//             segundosRestantes < 10
//                 ? "0" + segundosRestantes
//                 : segundosRestantes;

//         // agregamos como texto los segundos y minutos a elemento
//         var relojElemento = document.getElementById("reloj");

//         //document.querySelector('.fila-hora-directo-partido-tiempo').value = minutosTranscurridos+":"+segundosRestantes
//         jQuery(inputFila).val(minutosTranscurridos + ":" + segundosRestantes);
//         relojElemento.innerHTML =
//             "Minutos: " +
//             minutosTranscurridos +
//             "  Segundos: " +
//             segundosRestantes;

//         // Mostrar minutos y segundos transcurridos
//         console.log(
//             "Minutos transcurridos desde el inicio del partido: " +
//                 minutosTranscurridos
//         );
//         console.log(
//             "Segundos transcurridos desde el inicio del partido: " +
//                 segundosRestantes
//         );
//     }, 1000);
//     // Almacenar el intervalId en el objeto intervalIds
//     intervalIds[index] = intervalId;
//     return intervalId;
// };

// !(function ($) {
//     "use strict";

//     // guardamos los cambios de directos en base de datos y en fichero
//     $(".guardar-cambios-partidos-panel").on("click", function (e) {
//         // GUARDADO EN BASE DE DATOS
//         const formData = {
//             idPartido: $(this)
//                 .closest(".fila-directos-partido")
//                 .find(".fila-id-directo-partido")
//                 .text(),
//             idTemporadaPartido: $(this)
//                 .closest(".fila-directos-partido")
//                 .find(".fila-idTemporada-directo-partido")
//                 .attr("attr-id"),
//             fechaPartido: $(this)
//                 .closest(".fila-directos-partido")
//                 .find(".fila-fecha-directo-partido")
//                 .text(),
//             horaPartido: $(this)
//                 .closest(".fila-directos-partido")
//                 .find(".fila-hora-directo-partido-prevista")
//                 .val(),
//             estadoPartido: $(this)
//                 .closest(".fila-directos-partido")
//                 .find(".fila-estado-directo-partido")
//                 .val(),
//             idLocalPartido: $(this)
//                 .closest(".fila-directos-partido")
//                 .find(".fila-local-directo-partido")
//                 .attr("attr-id"),
//             golLocalPartido: $(this)
//                 .closest(".fila-directos-partido")
//                 .find(".fila-local-gol-directo-partido")
//                 .val(),
//             idVisitantePartido: $(this)
//                 .closest(".fila-directos-partido")
//                 .find(".fila-visitante-directo-partido")
//                 .attr("attr-id"),
//             golVisitantePartido: $(this)
//                 .closest(".fila-directos-partido")
//                 .find(".fila-visitante-gol-directo-partido")
//                 .val(),
//         };

//         // GUARDADO EN FICHERO SOLO PARA DIRECTOS E INICIAR EL RELOJ
//         const fila = $(this).closest(".fila-directos-partido");
//         const index = $(".fila-directos-partido").index(fila);
//         if (
//             $(this)
//                 .closest(".fila-directos-partido")
//                 .find(".fila-estado-directo-partido")
//                 .val() == 2
//         ) {
//             detenerReloj(index); // Detener el temporizador previo, si existe
//             let tiempoTiempo = $(this)
//                 .closest(".fila-directos-partido")
//                 .find(".fila-hora-directo-partido-tiempo");
//             iniciarReloj(
//                 $(this)
//                     .closest(".fila-directos-partido")
//                     .find(".fila-hora-directo-partido-real")
//                     .val(),
//                 tiempoTiempo
//             );
//         } else if (
//             $(this)
//                 .closest(".fila-directos-partido")
//                 .find(".fila-estado-directo-partido")
//                 .val() == 6
//         ) {
//             detenerReloj(index);
//         }
//     });

!(function ($) {
    "use strict";
    // guardamos cambios en fichero json y db
    $(".guardar-cambios-partidos-panel").on("click", function (e) {
        guardarDatosPartidosDirectosDb($(this).closest('.fila-directos-partido'))
    });
})(window.jQuery);

// funcion con la que lanzamos alertas
const alertFeed = (alertColor, alertTexto) => {
    jQuery(".alert-generic-panel").removeClass("alert-danger alert-success");
    jQuery(".alert-generic-panel").addClass(alertColor);
    jQuery(".alert-generic-panel").text(alertTexto);
    jQuery(".alert-generic-panel").fadeIn().delay(3500).fadeOut().delay(1500);
};

// guardamos los cambios de directos en base de datos y en fichero
const guardarDatosPartidosDirectosDb = (filaBotonPartido) => {
    const formData = {
        idPartido: $(filaBotonPartido).find(".fila-id-directo-partido").text(),
        idPartidoBetsapiOno: $(filaBotonPartido).find('.fila-idBetsapi-directo-partido').val(),
        fechaPartido: $(filaBotonPartido).find(".fila-fecha-directo-partido").val(),
        horaPrevistaPartido: $(filaBotonPartido).find('.fila-hora-directo-partido-prevista').val(),
        horaRealPartido: $(filaBotonPartido).find('.fila-hora-directo-partido-real').val(),
        estadoPartido: $(filaBotonPartido).find(".fila-estado-directo-partido").val(),
        idLocalPartido: $(filaBotonPartido).find(".fila-local-directo-partido").attr("attr-id"),
        golLocalPartido: $(filaBotonPartido).find(".fila-local-gol-directo-partido").val(),
        idVisitantePartido: $(filaBotonPartido).find(".fila-visitante-directo-partido").attr("attr-id"),
        golVisitantePartido: $(filaBotonPartido).find(".fila-visitante-gol-directo-partido").val(),
        idTemporadaPartido : $(filaBotonPartido).find(".fila-idTemporada-directo-partido").attr("attr-id"),
    };
    jQuery.ajax({
        url: `${urlBase}admin-panel/editar-partido/`,
        type: "POST",
        data: {
            formData,
        },
        headers: {
            "X-CSRF-TOKEN": csrfToken,
        },
        beforeSend: function () {
            //$(".spiner-competiciones").fadeIn();
            //$(acordion).html("");
        },
        success: function (response) {
            console.log(response);
            //let result = JSON.parse(response);
            //$(acordion).append(result)
        },
        complete: function () {
            //$(".spiner-competiciones").fadeOut();
        },
    });
};
