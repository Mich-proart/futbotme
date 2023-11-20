$(document).ready(function () {
    "use strict";

    // para directos en pagina index
    $("#fixed-columns-datatable").DataTable({
        scrollY: "calc(100vh - 570px)",
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
        columnDefs: [
            {
                targets: +1,
                data: "nombre",
                render: function (data, type, row, meta) {
                    // console.log(row.idJugador)
                    return `<a target="_blank" href="/admin-panel/jugadores/editar-jugador/${row.idJugador}">${data}</a>`;
                },
            },
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

    // para los clubes
    jQuery("#fixed-columns-datatable-clubes-paises").DataTable({});
    $(".disparador-paises").on("change", function (e) {
        if (this.value != 0) {
            let table = jQuery(
                "#fixed-columns-datatable-clubes-paises"
            ).DataTable();
            table != undefined && table != null ? table.destroy() : "";
            jQuery("#fixed-columns-datatable-clubes-paises").DataTable({
                ajax: `${urlBase}admin-panel/pais-club/${this.value}`,
                columns: [{ data: "idClub" }, { data: "nombre" }],
                columnDefs: [
                    {
                        targets: +1,
                        data: "nombre",
                        render: function (data, type, row, meta) {
                            // console.log(row.idJugador)
                            return `<a target="_self" href="/admin-panel/clubes/${row.idClub}">${data}</a>`;
                        },
                    },
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
        }
    });
});
