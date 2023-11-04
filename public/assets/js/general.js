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
        currentDateElement.textContent = `${weekdays[dateHeader.getDay()]}, ${dateHeader.getDate()} de ${dateHeader.toLocaleString('default', { month: 'long' })} de ${dateHeader.getFullYear()}`;
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

document.onload = function () {
    generateCalendar();
    const currentDateElement = document.getElementById("currentDate");
    if (currentDateElement) {
        const today = new Date();
        currentDateElement.textContent = `${weekdays[today.getDay()]}, ${today.getDate()} de ${today.toLocaleString('default', { month: 'long' })} de ${today.getFullYear()}`;
    }
};



