$(document).ready(function () {

    // quitamos elementos en desktop y en mobile
    if (is_mobile()) {

        $('.remove-mobile').remove()

    } else {

        $('.remove-desktop').remove()
    }

    $('.btn-hoy').trigger('click');


    /* INPUT NUMBER DE JORNADA DESKTOP */
    var input = $('#jornada_actual'),
        input_val = parseInt(input.val()),
        btn_add = $('.jornada_actual_add'),
        btn_remove = $('.jornada_actual_remove');

    input.keyup(function () {
        input_val = parseInt(input.val())
    });

    btn_add.click(function (e) {
        if (e.shiftKey) {
            input_val += 10
        } else {
            input_val++
        }
        input.val(input_val);
    });

    btn_remove.click(function (e) {
        if (input_val > 11 && e.shiftKey) {
            input_val -= 10
        } else if (input_val > 1) {
            input_val--
        }
        input.val(input_val);
    });

})

// verificamos si es mobile o no para eliminar elementos en la vista DESKTOP Y MOBILE
const is_mobile = () => {

    let ventana_ancho = $(window).width();

    if (ventana_ancho <= 820) {

        return true
    }
}


const weekdays = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
let date = new Date();

function getCurrentDate(element) {
    if (element) {
        element.value = date.toISOString().substring(0, 10);
    }
    return date;
}

function generateCalendar() {
    getCurrentDate(document.getElementById("date"));
    changeHeader(date);
}

function setDate(form) {
    let newDate = new Date(form.date.value);
    date = new Date(newDate.getFullYear(), newDate.getMonth(), newDate.getDate());
    changeHeader(date);
    return false;
}

function changeHeader(dateHeader) {
    const currentDateElement = document.getElementById("currentDate");
    if (currentDateElement) {
        const dayOfWeek = weekdays[dateHeader.getDay()];
        const day = dateHeader.getDate().toString().padStart(2, '0');
        const month = (dateHeader.getMonth() + 1).toString().padStart(2, '0');
        currentDateElement.textContent = `${dayOfWeek}, ${day}/${month}`;
    }
}


function resetDate() {
    date = new Date();
    generateCalendar();
}

function prevDay() {
    date = new Date(date.getFullYear(), date.getMonth(), date.getDate() - 1);
    getCurrentDate(document.getElementById("date"));
    changeHeader(date);
}

function nextDay() {
    date = new Date(date.getFullYear(), date.getMonth(), date.getDate() + 1);
    getCurrentDate(document.getElementById("date"));
    changeHeader(date);
}


window.onload = function () {
    generateCalendar();
    const currentDateElement = document.getElementById("currentDate");
    if (currentDateElement) {
        const today = new Date();
        const dayOfWeek = weekdays[today.getDay()];
        const day = today.getDate().toString().padStart(2, '0');
        const month = (today.getMonth() + 1).toString().padStart(2, '0');
        currentDateElement.textContent = `${dayOfWeek}, ${day}/${month}`;
    }
};

function openDatePicker() {
    const inputDate = document.createElement("input");
    inputDate.type = "date";
    inputDate.style.display = "none";
    inputDate.id = "date"; // Asigna el mismo ID que tenía el campo input original

    // Agrega el campo input de fecha al formulario
    const form = document.getElementById("date-search");
    form.appendChild(inputDate);

    // Abre el selector de fecha
    inputDate.click();

    // Elimina el campo input después de que se seleccione una fecha
    inputDate.addEventListener("change", function () {
        form.removeChild(inputDate);
        setDate(form);
    });
}




