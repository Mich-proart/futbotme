const alertFeed = (alertColor, alertTexto) =>{
    jQuery('.alert-generic-panel').removeClass('alert-danger alert-success')
    jQuery('.alert-generic-panel').addClass(alertColor)
    jQuery('.alert-generic-panel').text(alertTexto)
    jQuery('.alert-generic-panel').fadeIn().delay(3500).fadeOut().delay(1500)
}

!(function ($) {
    "use strict";

    // seleccionamos el tipo de competicion al hacer el select de competiciones
    $(".guardar-cambios-partidos-panel").on("click", function (e) {
        const formData = {
            idPartido : $(this).closest('.fila-directos-partido').find('.fila-id-directo-partido').text(),
            idTemporadaPartido : $(this).closest('.fila-directos-partido').find('.fila-idTemporada-directo-partido').attr('attr-id'),
            fechaPartido : $(this).closest('.fila-directos-partido').find('.fila-fecha-directo-partido').text(),
            horaPartido : $(this).closest('.fila-directos-partido').find('.fila-hora-directo-partido').val(),
            estadoPartido : $(this).closest('.fila-directos-partido').find('.fila-estado-directo-partido').val(),
            idLocalPartido : $(this).closest('.fila-directos-partido').find('.fila-local-directo-partido').attr('attr-id'),
            golLocalPartido : $(this).closest('.fila-directos-partido').find('.fila-local-gol-directo-partido').val(),
            idVisitantePartido : $(this).closest('.fila-directos-partido').find('.fila-visitante-directo-partido').attr('attr-id'),
            golVisitantePartido : $(this).closest('.fila-directos-partido').find('.fila-visitante-gol-directo-partido').val(),
        }
        console.log(formData)
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
                (response > '0') ? alertFeed('alert-success', 'cambios guardados') : alertFeed('alert-danger', '0 cambios detectados')
            },
            complete: function () {},
        });
    });
})(window.jQuery);
