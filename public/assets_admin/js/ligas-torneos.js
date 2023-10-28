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
                        // let contadorTabs = 0;
                        //$('.listado-torneo-competicion').html('')

                        // Recorremos el objeto
                        // $.each(result, function (nombreComunidad, torneos) {
                        //     // 'nombreComunidad' es el nombre de la comunidad
                        //     console.log("Comunidad:", nombreComunidad);
                        //     $(acordion).append(
                        //     `<div class="card mb-0">
                        //         <div class="card-header" style="cursor:pointer;" id="headingFour-${contadorTabs}">
                        //             <h5 class="custom-accordion-title d-block py-1 mb-0" data-bs-toggle="collapse" href="#collapseFour-${contadorTabs}"
                        //                     aria-expanded="false" aria-controls="collapseFour-${contadorTabs}">
                        //                     ${nombreComunidad}<i class="mdi mdi-chevron-down accordion-arrow"></i>
                        //             </h5>
                        //         </div>
    
                        //         <div id="collapseFour-${contadorTabs}" class="collapse" aria-labelledby="headingFour-${contadorTabs}"
                        //             data-bs-parent="#custom-accordion-one">
                        //             <div class="card-body">
                        //                 <ul class="list-group list-group-flush listado-torneo-competicion">
                        //                     ${
                        //                         $.each(torneos, function (index, torneo) {
                        //                             `<li class="list-group-item" style="cursor:pointer;">${torneo}</li>`
                        //                         })
                        //                     }
                        //                 </ul>
                        //             </div>
                        //         </div>
                        //     </div>`
                        //     );
                        //     contadorTabs++;
                        // });
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
                        //console.log("antes")
                    },
                    success: function (response) {
                        console.log(response);
                    },
                    complete: function () {
                        //console.log("finally")
                    },
                });
            }
        }
    });
})(window.jQuery);