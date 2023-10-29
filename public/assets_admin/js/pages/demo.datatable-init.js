$(document).ready(function () {
    "use strict";
    // $("#basic-datatable").DataTable({
    //     keys: !0,
    //     language: {
    //         paginate: {
    //             previous: "<i class='mdi mdi-chevron-left'>",
    //             next: "<i class='mdi mdi-chevron-right'>",
    //         },
    //     },
    //     drawCallback: function () {
    //         $(".dataTables_paginate > .pagination").addClass(
    //             "pagination-rounded"
    //         );
    //     },
    // });
    // var a = $("#datatable-buttons").DataTable({
    //     lengthChange: !1,
    //     buttons: ["copy", "print"],
    //     language: {
    //         paginate: {
    //             previous: "<i class='mdi mdi-chevron-left'>",
    //             next: "<i class='mdi mdi-chevron-right'>",
    //         },
    //     },
    //     drawCallback: function () {
    //         $(".dataTables_paginate > .pagination").addClass(
    //             "pagination-rounded"
    //         );
    //     },
    // });
    // $("#selection-datatable").DataTable({
    //     select: { style: "multi" },
    //     language: {
    //         paginate: {
    //             previous: "<i class='mdi mdi-chevron-left'>",
    //             next: "<i class='mdi mdi-chevron-right'>",
    //         },
    //     },
    //     drawCallback: function () {
    //         $(".dataTables_paginate > .pagination").addClass(
    //             "pagination-rounded"
    //         );
    //     },
    // }),
    //     a
    //         .buttons()
    //         .container()
    //         .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
    // $("#alternative-page-datatable").DataTable({
    //     pagingType: "full_numbers",
    //     drawCallback: function () {
    //         $(".dataTables_paginate > .pagination").addClass(
    //             "pagination-rounded"
    //         );
    //     },
    // }),
    //     $("#scroll-vertical-datatable").DataTable({
    //         scrollY: "350px",
    //         scrollCollapse: !0,
    //         paging: !1,
    //         language: {
    //             paginate: {
    //                 previous: "<i class='mdi mdi-chevron-left'>",
    //                 next: "<i class='mdi mdi-chevron-right'>",
    //             },
    //         },
    //         drawCallback: function () {
    //             $(".dataTables_paginate > .pagination").addClass(
    //                 "pagination-rounded"
    //             );
    //         },
    //     }),
    //     $("#scroll-horizontal-datatable").DataTable({
    //         scrollX: !0,
    //         language: {
    //             paginate: {
    //                 previous: "<i class='mdi mdi-chevron-left'>",
    //                 next: "<i class='mdi mdi-chevron-right'>",
    //             },
    //         },
    //         drawCallback: function () {
    //             $(".dataTables_paginate > .pagination").addClass(
    //                 "pagination-rounded"
    //             );
    //         },
    //     }),
    //     $("#complex-header-datatable").DataTable({
    //         language: {
    //             paginate: {
    //                 previous: "<i class='mdi mdi-chevron-left'>",
    //                 next: "<i class='mdi mdi-chevron-right'>",
    //             },
    //         },
    //         drawCallback: function () {
    //             $(".dataTables_paginate > .pagination").addClass(
    //                 "pagination-rounded"
    //             );
    //         },
    //         columnDefs: [{ visible: !1, targets: -1 }],
    //     }),
    //     $("#row-callback-datatable").DataTable({
    //         language: {
    //             paginate: {
    //                 previous: "<i class='mdi mdi-chevron-left'>",
    //                 next: "<i class='mdi mdi-chevron-right'>",
    //             },
    //         },
    //         drawCallback: function () {
    //             $(".dataTables_paginate > .pagination").addClass(
    //                 "pagination-rounded"
    //             );
    //         },
    //         createdRow: function (a, e, t) {
    //             15e4 < +e[5].replace(/[\$,]/g, "") &&
    //                 $("td", a).eq(5).addClass("text-danger");
    //         },
    //     }),
    //     $("#state-saving-datatable").DataTable({
    //         stateSave: !0,
    //         language: {
    //             paginate: {
    //                 previous: "<i class='mdi mdi-chevron-left'>",
    //                 next: "<i class='mdi mdi-chevron-right'>",
    //             },
    //         },
    //         drawCallback: function () {
    //             $(".dataTables_paginate > .pagination").addClass(
    //                 "pagination-rounded"
    //             );
    //         },
    //     }),
    //     $("#fixed-header-datatable").DataTable({ fixedHeader: !0 }),

    // para directos en pagina index
    $("#fixed-columns-datatable").DataTable({
        scrollY: "calc(100vh - 300px)",
        scrollX: !0,
        scrollCollapse: !0,
        pageLength: 50,
        fixedColumns: !0,
        language: {
            sProcessing: "Procesando...",
            sLengthMenu: "Mostrar _MENU_ registros",
            sZeroRecords: "No se encontraron resultados",
            sEmptyTable: "Ningún dato disponible en esta tabla =(",
            sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
            sInfoEmpty:
                "Mostrando registros del 0 al 0 de un total de 0 registros",
            sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
            sInfoPostFix: "",
            sSearch: "Buscar:",
            sUrl: "",
            sInfoThousands: ",",
            sLoadingRecords: "Cargando...",
            oPaginate: {
                sFirst: "Primero",
                sLast: "Último",
                sNext: "Siguiente",
                sPrevious: "Anterior",
            },
            oAria: {
                sSortAscending:
                    ": Activar para ordenar la columna de manera ascendente",
                sSortDescending:
                    ": Activar para ordenar la columna de manera descendente",
            },
            buttons: {
                copy: "Copiar",
                colvis: "Visibilidad",
            },
        },
        drawCallback: function () {
            $("ul.pagination").addClass("mt-3");
            $(".dataTables_paginate > .pagination").addClass(
                "pagination-rounded"
            );
        },
    });

    // para los jugadores
    // $("#fixed-columns-datatable-jugadores").DataTable({
    //     scrollY: "calc(100vh - 300px)",
    //     scrollX: !0,
    //     scrollCollapse: !0,
    //     pageLength: 50,
    //     fixedColumns: !0,
    //     language: {
    //         sProcessing: "Procesando...",
    //         sLengthMenu: "Mostrar _MENU_ registros",
    //         sZeroRecords: "No se encontraron resultados",
    //         sEmptyTable: "Ningún dato disponible en esta tabla =(",
    //         sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
    //         sInfoEmpty:
    //             "Mostrando registros del 0 al 0 de un total de 0 registros",
    //         sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
    //         sInfoPostFix: "",
    //         sSearch: "Buscar:",
    //         sUrl: "",
    //         sInfoThousands: ",",
    //         sLoadingRecords: "Cargando...",
    //         oPaginate: {
    //             sFirst: "Primero",
    //             sLast: "Último",
    //             sNext: "Siguiente",
    //             sPrevious: "Anterior",
    //         },
    //         oAria: {
    //             sSortAscending:
    //                 ": Activar para ordenar la columna de manera ascendente",
    //             sSortDescending:
    //                 ": Activar para ordenar la columna de manera descendente",
    //         },
    //         buttons: {
    //             copy: "Copiar",
    //             colvis: "Visibilidad",
    //         },
    //     },
    //     drawCallback: function () {
    //         $("ul.pagination").addClass("mt-3");
    //         $(".dataTables_paginate > .pagination").addClass(
    //             "pagination-rounded"
    //         );
    //     },
    // });

    // $("#fixed-columns-datatable-jugadores").DataTable({
    // })

    const csrfToken = $('meta[name="csrf-token"]').attr("content");

    console.log(csrfToken);

    new DataTable("#fixed-columns-datatable-jugadores", {
        ajax: {
            url: `${urlBase}admin-panel/jugadores-ajax/`,
            type: "POST", // Aquí se especifica que es un método POST
        },
        headers: {
            "X-CSRF-TOKEN": csrfToken,
        },
        columns: [
            { data: "idJugador" },
            { data: "nombre" },
            { data: "apodo" },
            { data: "posicion" },
            { data: "sexo" },
            { data: "fechaNacimiento" },
            { data: "lugarNacimiento" },
            { data: "equipoActual" },
            { data: "caracteristicas" },
        ],
        scrollY: "calc(100vh - 0px)",
        scrollX: !0,
        scrollCollapse: !0,
        pageLength: 50,
        fixedColumns: !0,
        language: {
            sProcessing: "Procesando...",
            sLengthMenu: "Mostrar _MENU_ registros",
            sZeroRecords: "No se encontraron resultados",
            sEmptyTable: "Ningún dato disponible en esta tabla =(",
            sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
            sInfoEmpty:
                "Mostrando registros del 0 al 0 de un total de 0 registros",
            sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
            sInfoPostFix: "",
            sSearch: "Buscar:",
            sUrl: "",
            sInfoThousands: ",",
            sLoadingRecords: "Cargando...",
            oPaginate: {
                sFirst: "Primero",
                sLast: "Último",
                sNext: "Siguiente",
                sPrevious: "Anterior",
            },
            oAria: {
                sSortAscending:
                    ": Activar para ordenar la columna de manera ascendente",
                sSortDescending:
                    ": Activar para ordenar la columna de manera descendente",
            },
            buttons: {
                copy: "Copiar",
                colvis: "Visibilidad",
            },
        },
        drawCallback: function () {
            $("ul.pagination").addClass("mt-3");
            $(".dataTables_paginate > .pagination").addClass(
                "pagination-rounded"
            );
        },
    });

    // $(".dataTables_length select").addClass("form-select form-select-sm"),
    // $(".dataTables_length label").addClass("form-label");
});
