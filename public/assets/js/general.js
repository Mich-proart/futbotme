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

function selectDateInModal(selectedDate) {
    const dateInput = document.getElementById("date");
    dateInput.value = selectedDate.toISOString().substring(0, 10);
    // Cierra el modal si es necesario
    $('#exampleModal').modal('hide');
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
            btn.addEventListener('click', function () {
                const day = parseInt(this.textContent);
                const newDate = new Date(date.getFullYear(), date.getMonth(), day);
                selectDateInModal(newDate);
            });
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

    const month = document.getElementById("month-header");
    if (month.childNodes[0]) {
        month.removeChild(month.childNodes[0]);
    }
    const headerMonth = document.createElement("h4");
    const textMonth = document.createTextNode(months[dateHeader.getMonth()].substring(0, 3) + " " + dateHeader.getFullYear());
    headerMonth.appendChild(textMonth);
    month.appendChild(headerMonth);

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

function nextMonth() {
    date = new Date(date.getFullYear(), date.getMonth() + 1, 1);
    generateCalendar();
}

function prevMonth() {
    date = new Date(date.getFullYear(), date.getMonth() - 1, 1);
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


function obtenerEvento(btnIdLiga) {

    jQuery.ajax({
        url: apiUrlEvents, // AJAX handler,
        method: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            id: jQuery(btnIdLiga).attr('attr-id-evento'),
        },
        beforeSend: function () {
            // accion de antes envio
        },
        complete: function () {

            // accion cuando este completa la peticion
        },
        success: function (data) {

            console.log(jQuery(btnIdLiga).attr('attr-id-evento'));
            console.log(data);
            // Elimina cualquier contenido adicional después del JSON
            const jsonData = data.substring(0, data.lastIndexOf('}') + 1);

            // Parsea el JSON
            let result = JSON.parse(jsonData)
            jQuery('.lista-eventos').empty()
            jQuery('.icons-directos-estaticos').find('.content-eventos').addClass('d-none')
            jQuery('.contenedorIconosPartido').find('.content-eventos').addClass('d-none')
            jQuery(btnIdLiga).closest('.icons-directos-estaticos').find('.content-eventos').removeClass('d-none')
            jQuery(btnIdLiga).closest('.contenedorIconosPartido').find('.content-eventos').removeClass('d-none')
            if (result.results[0].events) {
                for (const iterator of result.results[0].events) {

                    jQuery(btnIdLiga).addClass("d-inline-block");

                    jQuery(btnIdLiga).closest('.icons-directos-estaticos').find('.lista-eventos').append(`<li class="list-group-item">${iterator.text}</li>`)
                    jQuery(btnIdLiga).closest('.contenedorIconosPartido').find('.lista-eventos').append(`<li class="list-group-item">${iterator.text}</li>`)
                }
            } else {
                console.log("en el falso")
                jQuery(btnIdLiga).closest('.contenedorIconosPartido').find('.lista-eventos').append(`<li class="list-group-item">No disponible</li>`)
            }
        }
    })
}
// Obtenemos las alineciones por medio de api pasando como parametro el id que le pasamos 
// En el boton click de directo en la portada
function obtenerAlineacion(btnIdLiga) {

    jQuery.ajax({
        url: apiUrlAlineaciones, // AJAX handler,
        method: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            id: jQuery(btnIdLiga).attr('attr-id-evento'),
        },
        beforeSend: function () {
            // accion de antes envio
        },
        complete: function () {

            // accion cuando este completa la peticion
        },
        success: function (data) {

            console.log(jQuery(btnIdLiga).attr('attr-id-evento'))

            //console.log(data);
            // Elimina cualquier contenido adicional después del JSON
            const jsonData = data.substring(0, data.lastIndexOf('}') + 1);

            jQuery('.listado-locales').empty()

            jQuery('.listado-visitantes').empty()

            jQuery('.span-id-torneo-alineacion').closest('.mas_info_partido').find('.content-alineaciones').removeClass('d-block').addClass('d-none')

            jQuery('.span-id-torneo-alineacion').closest('.jorge-jorge').find('.content-alineaciones').removeClass('d-block').addClass('d-none')

            jQuery('.title-alineacion').addClass('d-none')

            // Parsea el JSON
            let result = JSON.parse(jsonData);
            console.log(result);
            if (!(result.results && result.results.home && result.results.away)) {
                console.log('no hay alineaciones');
                jQuery('.title-alineacion').addClass('d-none')

                jQuery(btnIdLiga).closest('.mas_info_partido').find('.content-alineaciones').find('p').remove()

                jQuery(btnIdLiga).closest('.jorge-jorge').find('.content-alineaciones').find('p').remove()

                jQuery(btnIdLiga).closest('.mas_info_partido').find('.content-alineaciones').append('<p>No disponible</p>')

                jQuery(btnIdLiga).closest('.jorge-jorge').find('.content-alineaciones').append('<p>No disponible</p>')

                jQuery(btnIdLiga).closest('.mas_info_partido').find('.content-alineaciones').removeClass('d-none').addClass('d-block')

                jQuery(btnIdLiga).closest('.jorge-jorge').find('.content-alineaciones').removeClass('d-none').addClass('d-block')

            } else {
                console.log('si hay alineaciones');

                for (const iterator of result.results.home.startinglineup) {

                    jQuery(btnIdLiga).closest('.mas_info_partido').find('.listado-locales').append(
                        `<li class="item-alineacion item-local bg_${iterator.pos}">
                            ${iterator.player.name} 
                            <span class="dorsal">${iterator.shirtnumber}</span> 
                            <div class="d-inline-flex rounded-circle bandera_pais">
                                <img src="https://flagcdn.com/${iterator.player.cc}.svg" width="32" height="32" alt="bandera del pais del torneo" class="rounded-circle">
                            </div>
                        </li>`)

                    jQuery(btnIdLiga).closest('.jorge-jorge').find('.listado-locales').append(
                        `<li class="item-alineacion item-local bg_${iterator.pos}">
                            ${iterator.player.name} 
                            <span class="dorsal">${iterator.shirtnumber}</span> 
                            <div class="d-inline-flex rounded-circle bandera_pais">
                                <img src="https://flagcdn.com/${iterator.player.cc}.svg" width="32" height="32" alt="bandera del pais del torneo" class="rounded-circle">
                            </div>
                        </li>`)

                    //console.log(iterator)          
                }

                for (const iterator of result.results.away.startinglineup) {

                    jQuery(btnIdLiga).closest('.mas_info_partido').find('.listado-visitantes').append(
                        `<li class="item-alineacion item-visitantes">${iterator.shirtnumber} - ${iterator.player.name}</li>`)

                    jQuery(btnIdLiga).closest('.jorge-jorge').find('.listado-visitantes').append(
                        `<li class="item-alineacion item-visitantes">${iterator.shirtnumber} - ${iterator.player.name}</li>`)
                    //console.log(iterator)          
                }

                jQuery(btnIdLiga).closest('.mas_info_partido').find('.content-alineaciones').removeClass('d-none').addClass('d-block')

                jQuery(btnIdLiga).closest('.jorge-jorge').find('.content-alineaciones').removeClass('d-none').addClass('d-block')

                jQuery(btnIdLiga).closest('.mas_info_partido').find('.title-alineacion').removeClass('d-none')

                jQuery(btnIdLiga).closest('.jorge-jorge').find('.title-alineacion').removeClass('d-none')
            }
        }
    })

};



//Mostramos modal de alineacion
jQuery(document).on('click', '.span-id-torneo-alineacion', function () {

    obtenerAlineacion(jQuery(this));

});

// Cerramos modal de alineacion
jQuery(document).on('click', '.cerrar-alineacion', function () {

    jQuery(this).closest('.content-alineaciones').removeClass('d-block').addClass('d-none');
});

// Mostramos datos de tipo evento de torneo
jQuery(document).on('click', '.span-evento-trigger', function () {

    obtenerEvento(jQuery(this));
});

// Ocultar modal de eventos 
jQuery(document).on('click', '.cerrar-eventos', function () {

    jQuery(this).closest('.content-eventos').addClass('d-none')
});


// setTimeout(() => {
/* setInterval(() => {
    console.log("leyendo ficheros")
    terravison()
    terravison22()
}, 1000); */
// }, 1000);