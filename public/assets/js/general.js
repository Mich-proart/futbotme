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



const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre", "Diciembre"];
const weekdays = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado"];
let date = new Date();

function getCurrentDate(element) {
    if (element) {
        element.value = date.toISOString().substring(0, 10);
    }
    return date;
}

function generateCalendar() {
    const calendar = document.getElementById('calendar');
    if (calendar) calendar.remove();

    const table = document.createElement("table");
    table.id = "calendar";

    const trHeader = document.createElement('tr');
    trHeader.className = 'weekends';
    weekdays.forEach(week => {
        const th = document.createElement('th');
        const w = document.createTextNode(week.substring(0, 3));
        th.appendChild(w);
        trHeader.appendChild(th);
    });
    table.appendChild(trHeader);

    const weekDay = new Date(date.getFullYear(), date.getMonth(), 1).getDay();
    const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
    let tr = document.createElement("tr");
    let td = '';
    let empty = '';
    let btn = document.createElement('button');
    let week = 0;

    while (week < weekDay) {
        td = document.createElement("td");
        empty = document.createTextNode(' ');
        td.appendChild(empty);
        tr.appendChild(td);
        week++;
    }

    for (let i = 1; i <= lastDay;) {
        while (week < 7) {
            td = document.createElement('td');
            let text = document.createTextNode(i);
            btn = document.createElement('button');
            btn.className = "btn-day";
            btn.addEventListener('click', function () { changeDate(this) });
            week++;

            if (i <= lastDay) {
                i++;
                btn.appendChild(text);
                td.appendChild(btn)
            } else {
                text = document.createTextNode(' ');
                td.appendChild(text);
            }
            tr.appendChild(td);
        }
        table.appendChild(tr);
        tr = document.createElement("tr");
        week = 0;
    }

    const content = document.getElementById('table');
    content.appendChild(table);
    changeActive();
    changeHeader(date);
    document.getElementById('date').textContent = date;
    getCurrentDate(document.getElementById("currentDate"));
    getCurrentDate(document.getElementById("date"));    
}

/* function setDate(form) {
    let newDate = new Date(form.date.value);
    date = new Date(newDate.getFullYear(), newDate.getMonth(), newDate.getDate());
    changeHeader(date);
    return false;
} */

function setDate(form) {
    const newDateInput = new Date(form.date.value); // Fecha ingresada por el usuario
    const offsetMinutes = newDateInput.getTimezoneOffset(); // Obtén la diferencia de zona horaria en minutos

    // Ajusta la fecha para tener en cuenta la diferencia de zona horaria
    newDateInput.setMinutes(newDateInput.getMinutes() + offsetMinutes);

    date = new Date(newDateInput.getFullYear(), newDateInput.getMonth(), newDateInput.getDate());
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

function changeActive() {
    let btnList = document.querySelectorAll('button.active');
    btnList.forEach(btn => {
        btn.classList.remove('active');
    });
    btnList = document.getElementsByClassName('btn-day');
    for (let i = 0; i < btnList.length; i++) {
        const btn = btnList[i];
        if (btn.textContent === (date.getDate()).toString()) {
            btn.classList.add('active');
        }
    }
}

function resetDate() {
    date = new Date();
    generateCalendar();
}

function changeDate(button) {
    let newDay = parseInt(button.textContent);
    date = new Date(date.getFullYear(), date.getMonth(), newDay);
    generateCalendar();
}

function prevDay() {
    date = new Date(date.getFullYear(), date.getMonth(), date.getDate() - 1);
    generateCalendar();
}

function nextDay() {
    date = new Date(date.getFullYear(), date.getMonth(), date.getDate() + 1);
    generateCalendar();
}

//document.onload = generateCalendar(date);

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





