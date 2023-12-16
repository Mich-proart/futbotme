!(function ($) {
    ("use strict");

    if (document.querySelector(".reset-select") != undefined || document.querySelector(".reset-select") != null) {
        document.addEventListener("DOMContentLoaded", function () {
            // Obtener el elemento select
            var selectElement = document.querySelector(".reset-select");

            // Establecer el valor predeterminado en la primera opción (índice 0)
            selectElement.selectedIndex = 0;
        });
    }
})(window.jQuery);
