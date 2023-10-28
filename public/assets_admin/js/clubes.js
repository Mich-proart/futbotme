!(function ($) {
    "use strict";

    // seleccionamos el pais para obtener los clubes
    $(".disparador-paises").on("change", function (e) {
        const formData = {
            idPais: this.value,
        };
        jQuery.ajax({
            url: `${urlBase}admin-panel/pais-club/`,
            type: "POST",
            data: {
                formData,
            },
            headers: {
                "X-CSRF-TOKEN": csrfToken,
            },
            beforeSend: function () {
                $(".spiner-clubes").fadeIn();
            },
            success: function (response) {
                console.log(response);
                let result = JSON.parse(response);
            },
            complete: function () {
                $(".spiner-clubes").fadeOut();
            },
        });
    });
})(window.jQuery);