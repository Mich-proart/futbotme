!(function ($) {
    "use strict";

    $(".guardar-goleador-editar-partido").on("click", function (e) {
        guardarGoleadorEnDb();
    });
})(window.jQuery);

// guardar goleador en base de datos
const guardarGoleadorEnDb = () => {
    let idPartido = jQuery(".id-editar-partido").attr("attr-id-partido");
    let temporadaIdPartido = jQuery(".temporada-editar-partido").attr("attr-temporada-partido");
    let idJugador = jQuery(".id-jugador-editar-partido").val();
    let minutos = jQuery(".minuto-editar-partido").val();
    let tipoJugada = jQuery(".tipo-gol-editar-partido").val();
    let esLocal = jQuery(".es-local-editar-partido").prop("checked") == false ? 0 : 1;
    let observaciones = jQuery(".observaciones-editar-partido").val();

    if (idPartido != '' && minutos != '') {
        let objSend = {
            idPartido,
            temporadaIdPartido,
            idJugador,
            minutos,
            tipoJugada,
            esLocal,
            observaciones,
        };

        jQuery.ajax({
            url: `${urlBase}admin-panel/guardar-goles-partido/`,
            type: "POST",
            data: {
                objSend,
            },
            headers: {
                "X-CSRF-TOKEN": csrfToken,
            },
            beforeSend: function () {
                // $(".spiner-competiciones").fadeIn();
                // $(acordion).html("");
            },
            success: function (response) {
                // console.log(response);
                let result = JSON.parse(response);
                // jQuery('.bandeja-goleadores').append(result);
                // console.log(result)

                // Suponiendo que recibes un nuevo texto del servidor en la variable 'nuevoTexto'
                var nuevoTexto = result;

                // Obtener el texto existente en el textarea
                var textoExistente = jQuery('.bandeja-goleadores').val();

                // Agregar el nuevo texto debajo del texto existente con un salto de línea
                var textoCompleto = textoExistente + '\n' + nuevoTexto;

                // Establecer el texto completo en el textarea
                jQuery('.bandeja-goleadores').val(textoCompleto);

                //if (insercion) {
                    
                //}
                //$(acordion).append(result)
            },
            complete: function () {
                //$(".spiner-competiciones").fadeOut();
            },
        });
    }else{
        alertFeed('alert-danger', 'no puedes guardar minutos vacios')
    }
};
