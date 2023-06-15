// hacemos los cambios en partidos directos cambios solo de valores para no afectar el html solo los datos
const partidosDirecto = (respuesta) => {

    let fechaActual = new Date();
    let hora = fechaActual.getHours();
    let minutos = fechaActual.getMinutes();

    jQuery('.update-un-minuto').text(hora + ":" + minutos)

    let contentPartidos = jQuery('#PartidosEnDirecto')

    contentPartidos.empty();

    for (const iterator of respuesta) {

        //let partePartido = iterator.timer.tm > 45 ? 2 : 1

        let obj = `
        <div class="accordion-item br-0">
            <h2 class="accordion-header d-flex align-items-center justify-content-between" id="panelsStayOpen-heading-${iterator.id}">

                <div class="d-block py-2 px-4">
                    <span class="icon-resolve-filled">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </span>
                </div>

                <div class="py-2 col-lg-10 col">
                    <i class="bi bi-x-square fs-4 pe-2"></i>
                    <h3 class="d-inline-block color-black fs-01">${iterator.league.name}</h3>
                    <span>-</span>
                    <h4 class="fs-00 d-lg-inline-block">RFEF</h4>
                </div>

                <button class="accordion-button w-auto py-3 px-4" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapse-${iterator.id}" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapse-${iterator.id}">
                    <i class="color-gray-medium bi bi-chevron-up fs-3"></i>
                </button>
            </h2>
            
            <div id="panelsStayOpen-collapse-${iterator.id}" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-heading-${iterator.id}">
                <div class="accordion-body border-bottom">
                    <div class="d-flex aling-items-center justify-content-between ">
                        <div class="col-2 d-flex aling-items-center ">
                            <div class="d-block py-2 px-1 fs-2">
                                <span class="icon-resolve-filled">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </span>
                            </div>
                            <div>
                                <span class="mx-4 hora d-inline-block mt-2 fw-bold">17:30</span>
                            </div>

                        </div>
                        <span class="fs-00 d-grid grid-center-xy jornada_tiempo">${iterator.timer.tm}’</span>
                        <div class="col-2">
                            <span class="icon-TV d-inline-block fs-1 d-grid grid-center-xy"></span>
                        </div>

                    </div>
                    <div
                        class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                        <div class="local">
                            <img src="https://assets.b365api.com/images/team/m/${iterator.home.image_id}.png" class="logo_s img-fluid">
                            <h3 class="d-inline-block color-black fs-01">
                                ${iterator.home.name} 
                            </h3>
                            <div class="goleadores text-end">
                            </div>
                        </div>

                        <div class="col-auto marcador px-lg-4 px-3">
                            <span class="goles-local">${iterator.scores[1].home}</span>
                            <span class="fs-01 color-red">-</span>
                            <span class="goles-visitante">${iterator.scores[1].away}</span>
                        </div>

                        <div class="visitante">
                            <img src="https://assets.b365api.com/images/team/m/${iterator.away.image_id}.png" class="logo_s img-fluid">
                            <h3 class="d-inline-block color-black fs-01">
                                ${iterator.away.name}
                            </h3>
                            <div class="goleadores">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>`

        jQuery(contentPartidos).append(obj);

        console.log(iterator)
    }
}

/*
*
* funcion generica para realizar las peticiones de api
* para reutilizar la funcion la dividimos con switch 
*/
const hacerPeticion = (tipoPeticion) => {

    let xmlhttp, urlPeticion;

    // validamos el tipo de peticion para ejecutar una u otra funcion para devolver distintas respuestas con una misma funcion ajax
    switch (tipoPeticion) {

        case 'partidosDirecto':

            urlPeticion = `${urlBase}api/bestApi`

            break;
    }

    // Verda código para navegadores modernos
    // False código para navegadores antiguos (IE6, IE5)
    window.XMLHttpRequest ? xmlhttp = new XMLHttpRequest() : xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")

    // Función de callback para manejar la respuesta de la API
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            // La respuesta se ha recibido correctamente
            let respuesta = xmlhttp.responseText;

            respuesta = JSON.parse(respuesta)

            // validamos el tipo de peticion para ejecutar una u otra funcion para devolver distintas respuestas con una misma funcion ajax
            switch (tipoPeticion) {

                case 'partidosDirecto':

                    partidosDirecto(respuesta)

                    break;
            }
        }
    };

    // Realizar la petición a la API (en este caso, se utiliza la API de ejemplo 'https://ejemplo.com/api')
    xmlhttp.open("GET", urlPeticion, true);

    // Configura las cabeceras personalizadas
    xmlhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);


    xmlhttp.send();
}

/*** inicio de ejecuciones ****/
$(document).ready(function () {

    /* 
    *
    * ejecutamos la peticion y luego cada 1 minuto 
    * 
    */

    hacerPeticion('partidosDirecto')

    setInterval(() => {

        hacerPeticion('partidosDirecto')

    }, 60000000);

    /* 
    *
    * ejecutamos la peticion y luego cada 1 minuto 
    * 
    */
})