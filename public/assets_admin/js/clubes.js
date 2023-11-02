!(function ($) {
    "use strict";

    // seleccionamos el pais para obtener los clubes
    $(".disparador-paises").on("change", function (e) {
        if (this.value != 0) {
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
                    $(".spiner-clubes").fadeIn()
                    $('.placeholder-fantasma-clubes').remove()
                    $('.listado-club-por-pais').html('')
                },
                success: function (response) {
                    console.log(response);
                    let result = JSON.parse(response)
                    for (const iterator of result) {
                        if(iterator.nombre != ''){
                            $('.listado-club-por-pais').append(
                            `<li class="list-group-item"><a href="clubes/${iterator.id}">${iterator.nombre}</a></li>`);
                        }
                    }
                },
                complete: function () {
                    $(".spiner-clubes").fadeOut();
                },
            });
        }
    });
})(window.jQuery);