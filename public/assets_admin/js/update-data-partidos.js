!(function ($) {
    "use strict";
    // guardamos cambios en fichero json y db
    $(".guardar-cambios-partidos-panel").on("click", function (e) {
        guardarDatosPartidosDirectosDb($(this).closest(".fila-directos-partido"));
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
        idPartidoBetsapiOno: $(filaBotonPartido).find(".fila-idBetsapi-directo-partido").val(),
        fechaPartido: $(filaBotonPartido).find(".fila-fecha-directo-partido").val(),
        horaPrevistaPartido: $(filaBotonPartido).find(".fila-hora-directo-partido-prevista").val(),
        horaRealPartido: $(filaBotonPartido).find(".fila-hora-directo-partido-real").val(),
        estadoPartido: $(filaBotonPartido).find(".fila-estado-directo-partido").val(),
        idLocalPartido: $(filaBotonPartido).find(".fila-local-directo-partido").attr("attr-id"),
        golLocalPartido: $(filaBotonPartido).find(".fila-local-gol-directo-partido").val(),
        idVisitantePartido: $(filaBotonPartido).find(".fila-visitante-directo-partido").attr("attr-id"),
        golVisitantePartido: $(filaBotonPartido).find(".fila-visitante-gol-directo-partido").val(),
        idTemporadaPartido: $(filaBotonPartido).find(".fila-idTemporada-directo-partido").attr("attr-id"),
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
        beforeSend: function () {},
        success: function (response) {
            console.log(response);
            let result = JSON.parse(response);
            if (result == 'guardado') {
                alertFeed('alert-success', 'Guardado exitoso')
            }else{
                alertFeed('alert-danger', 'Error al guardar')
            }
        },
        complete: function () {},
    });
};
