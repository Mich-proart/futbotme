!(function ($) {
    "use strict";

    console.log(urlBase);

    // fichero con el que haremos importacion masiva de datos de la API

    jQuery.ajax({
        url: `${urlBase}admin-panel`,
        type: "GET",
        // data: {
        //     formData,
        // },
        headers: {
            "X-CSRF-TOKEN": csrfToken,
        },
        beforeSend: function () {
            console.log("antes")
        },
        success: function (response) {
            console.log(response)
        },
        complete: function () {
            console.log("finally")
        },
    });
})(window.jQuery);
