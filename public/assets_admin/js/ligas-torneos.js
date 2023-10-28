!(function ($) {
    "use strict";

    // seleccionamos el tipo de competicion al hacer el select de competiciones
    $(".disparador-competicion").on("change", function () {
        //validamos 1-ligas 2-torneos
        const formData = {
            valorCat: this.value,
            tipoCompeticion: $(this).attr("attr-tipo-competicion"),
        };
        let acordion = $(".acordion-competiciones");
        if ($(this).attr("attr-tipo-competicion") == 1) {
            if (this.value != 0) {
                jQuery.ajax({
                    url: `${urlBase}admin-panel/competicion-ligas/`,
                    type: "POST",
                    data: {
                        formData,
                    },
                    headers: {
                        "X-CSRF-TOKEN": csrfToken,
                    },
                    beforeSend: function () {
                        $(".spiner-competiciones").fadeIn();
                        $(acordion).html("");
                    },
                    success: function (response) {
                        console.log(response);
                        let result = JSON.parse(response);
                        $(acordion).append(result)
                    },
                    complete: function () {
                        $(".spiner-competiciones").fadeOut();
                    },
                });
            }
        } else {
            if (this.value != 0) {
                jQuery.ajax({
                    url: `${urlBase}admin-panel/competicion-torneos/`,
                    type: "POST",
                    data: {
                        formData,
                    },
                    headers: {
                        "X-CSRF-TOKEN": csrfToken,
                    },
                    beforeSend: function () {
                        $(".spiner-competiciones").fadeIn();
                        $(acordion).html("");
                    },
                    success: function (response) {
                        console.log(response);
                        let result = JSON.parse(response);
                        $(acordion).append(result)
                    },
                    complete: function () {
                        $(".spiner-competiciones").fadeOut();
                    },
                });
            }
        }
    });
})(window.jQuery);