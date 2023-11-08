!(function ($) {
    "use strict";

    //console.log(urlBase);

    // fichero con el que haremos importacion masiva de datos de la API

    // jQuery.ajax({
    //     url: `${urlBase}admin-panel`,
    //     type: "GET",
    //     // data: {
    //     //     formData,
    //     // },
    //     headers: {
    //         "X-CSRF-TOKEN": csrfToken,
    //     },
    //     beforeSend: function () {
    //         //console.log("antes")
    //     },
    //     success: function (response) {
    //         //console.log(response)
    //     },
    //     complete: function () {
    //         //console.log("finally")
    //     },
    // });

    // $("#draggable-menu").sortable({
    //     cancel: ".remove",
    //     items: ".item",
    //     placeholder: 'sortable-placeholde',
    //   });

    //   jQuery(".item .remove").on("click", function () {
    //     $(this).closest(".item").remove();
    //   });
})(window.jQuery);

// var intervalo;

// function iniciarReloj(tiempoInicial) {
//     var tiempoInicio = new Date(tiempoInicial).getTime();
//     var relojElemento = document.getElementById("reloj");

//     intervalo = setInterval(function() {
//         var ahora = new Date().getTime();
//         var tiempoTranscurrido = ahora - tiempoInicio;

//         var horas = Math.floor((tiempoTranscurrido % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//         var minutos = Math.floor((tiempoTranscurrido % (1000 * 60 * 60)) / (1000 * 60));
//         var segundos = Math.floor((tiempoTranscurrido % (1000 * 60)) / 1000);

//         relojElemento.innerHTML = pad(horas) + ":" + pad(minutos) + ":" + pad(segundos);
//     }, 1000);
// }

// function pad(numero) {
//     return numero < 10 ? "0" + numero : numero;
// }

// function detenerReloj() {
//     clearInterval(intervalo);
// }

// jQuery('.init-reloj-partido').on('click', function(){
//     iniciarReloj("2023-11-08T23:00:00");
// })

// jQuery('.detener-reloj-partido').on('click', function(){
//     detenerReloj();
// })

var tiempoActual = 0; // Tiempo actual del partido en segundos
var intervalo; // Variable global para almacenar el ID del intervalo

function iniciarReloj() {
    var relojElemento = document.getElementById("reloj");

    intervalo = setInterval(function () {
        var minutos = Math.floor(tiempoActual / 60);
        var segundos = tiempoActual % 60;

        // Asegúrate de que los minutos y segundos tengan dos dígitos
        minutos = minutos < 10 ? "0" + minutos : minutos;
        segundos = segundos < 10 ? "0" + segundos : segundos;

        relojElemento.innerHTML = "Minuto " + minutos + " : " + segundos;
        tiempoActual++;
    }, 1000); // 1 segundo en milisegundos
}

function detenerReloj() {
    clearInterval(intervalo);
}

jQuery(".init-reloj-partido").on("click", function () {
    console.log("first");
    iniciarReloj();
});

jQuery(".detener-reloj-partido").on("click", function () {
    detenerReloj();
});

// Llamar a la función para iniciar el reloj con la hora de inicio del partido
