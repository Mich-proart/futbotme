!(function ($) {
    "use strict";

    jQuery('.btn-forzar-estados').on('click', function (){
        leerFicheroJson()
    })
})(window.jQuery);

const leerFicheroJson = () => {
    jQuery.ajax({
        url: `${urlBase}admin-panel/update-status-football-soccer/`,
        type: "POST",
        // data: {
        //     formData,
        // },
        headers: {
            "X-CSRF-TOKEN": csrfToken,
        },
        beforeSend: function () {
            // $(".spiner-competiciones").fadeIn();
            // $(acordion).html("");
        },
        success: function (response) {
            console.log(response);
            // let result = JSON.parse(response);
            // $(acordion).append(result)
        },
        complete: function () {
            // $(".spiner-competiciones").fadeOut();
        },
    });
};

leerFicheroJson();

// checkeamos todos los estados, partidos para actualizar estados
// const checkedStatusFootballGame = () => {};

// {
//     "idPartido": 1169362,
//     "estaPartido": 2,
//     "golesLocal": 0,
//     "golesVisitante": 0,
//     "idLocal": 15233,
//     "idVisitante": 51101
// }
