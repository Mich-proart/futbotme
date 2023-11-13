!(function ($) {
    "use strict";

    var intervalId;

    // NUEVO
    function iniciarReloj(horaPartido) {
        intervalId = setInterval(() => {
            // Hora de inicio del partido (en formato HH:mm)
            var horaInicio = horaPartido;

            // Obtener la hora actual
            var ahora = new Date();
            var horaActual = ahora.getHours();
            var minutosActuales = ahora.getMinutes();
            var segundosActuales = ahora.getSeconds();

            // Convertir la hora de inicio y la hora actual a segundos
            var horaInicioArray = horaInicio.split(":");
            var segundosInicio =
                parseInt(horaInicioArray[0]) * 3600 +
                parseInt(horaInicioArray[1]) * 60;
            var segundosActualesTotal =
                horaActual * 3600 + minutosActuales * 60 + segundosActuales;

            // Calcular la diferencia en segundos
            var segundosTranscurridos = segundosActualesTotal - segundosInicio;

            // Calcular minutos y segundos
            var minutosTranscurridos = Math.floor(segundosTranscurridos / 60);
            var segundosRestantes = segundosTranscurridos % 60;

            // agregamos 0 a los minutos que son menores que dies
            minutosTranscurridos =
                minutosTranscurridos < 10
                    ? "0" + minutosTranscurridos
                    : minutosTranscurridos;

            // agregamos 0 a los segundos menores que diez
            segundosRestantes =
                segundosRestantes < 10
                    ? "0" + segundosRestantes
                    : segundosRestantes;

            // agregamos como texto los segundos y minutos a elemento
            var relojElemento = document.getElementById("reloj");
            relojElemento.innerHTML =
                "Minutos: " +
                minutosTranscurridos +
                "  Segundos: " +
                segundosRestantes;

            // Mostrar minutos y segundos transcurridos
            console.log(
                "Minutos transcurridos desde el inicio del partido: " +
                    minutosTranscurridos
            );
            console.log(
                "Segundos transcurridos desde el inicio del partido: " +
                    segundosRestantes
            );
        }, 1000);
    }
    // NUEVO

    function detenerReloj() {
        clearInterval(intervalId);
    }

    jQuery(".init-reloj-partido").on("click", function () {
        iniciarReloj("22:00");
    });

    jQuery(".detener-reloj-partido").on("click", function () {
        detenerReloj();
    });
})(window.jQuery);
