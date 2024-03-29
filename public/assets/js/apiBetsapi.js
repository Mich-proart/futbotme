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
            <h2 class="accordion-header d-flex align-items-center justify-content-between text-white"
                id="panelsStayOpen-heading${iterator.id}">

                <div class="py-2 col-lg-10 col d-flex align-items-center gap-3">
                    <div class="d-block ps-4">
                        <span class="icon-resolve-filled">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </span>
                    </div>

                    <div class="d-inline-flex rounded-circle bandera_pais">
                        <img src="https://flagcdn.com/${iterator.league.cc}.svg" width="32" height="32"
                            alt="bandera del pais del torneo" class="rounded-circle">
                    </div>

                    <h3 class="d-inline-block fs-01 nombre_torneo_liga">${iterator.league.name} <span>-</span> RFEF
                    </h3>
                </div>

                <button class="accordion-button w-auto py-lg-4 px-lg-5 p-2 text-white" type="button"
                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse${iterator.id}" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapse${iterator.id}">
                    <i class="bi bi-chevron-up fs-3"></i>
                </button>
            </h2>
            <div id="panelsStayOpen-collapse${iterator.id}" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-heading${iterator.id}">
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
                                <span
                                    class="mx-4 hora minitos_partidos d-inline-block fw-semibold px-4 bg_${iterator.timer.tm}_minutos text-white">${iterator.timer.tm}’</span>
                            </div>

                        </div>

                        <div
                            class="col text-end mas_info_partido d-flex aling-items-center justify-content-end gap-4">
                            <span class="icon-alienacion d-inline-block fs-1"></span>
                            <span class="icon-ball d-inline-block fs-1"></span>
                            <span class="icon-TV d-inline-block fs-1"></span>
                        </div>

                    </div>
                    <div
                        class="mx-0 partido_alineado my-2">
                        <div class="local">
                            <h3 class="d-inline-block">${iterator.home.name} </h3>
                            <div class="escudo d-lg-inline-block d-none"><img
                                    src="https://assets.b365api.com/images/team/m/${iterator.home.image_id}.png"
                                    class="logo_s img-fluid"></div>
                        </div>

                        <div class="marcador px-lg-4 px-3">
                            <span class="goles-local">${iterator.scores[1].home}</span>
                            <span class="fs-01 color-red">-</span>
                            <span class="goles-visitante">${iterator.scores[2].away}</span>
                        </div>

                        <div class="visitante">
                            <div class="escudo d-lg-inline-block d-none"><img
                                    src="https://assets.b365api.com/images/team/m/${iterator.away.image_id}.png"
                                    class="logo_s img-fluid"></div>
                            <h3 class="d-inline-block">${iterator.away.name}</h3>
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
//const hacerPeticion = (tipoPeticion) => {

    //let xmlhttp, urlPeticion;

    // validamos el tipo de peticion para ejecutar una u otra funcion para devolver distintas respuestas con una misma funcion ajax
    // switch (tipoPeticion) {

    //     case 'partidosDirecto':

    //         urlPeticion = `${urlBase}api/bestApi`

    //         break;
    // }

    // Verda código para navegadores modernos
    // False código para navegadores antiguos (IE6, IE5)
    //window.XMLHttpRequest ? xmlhttp = new XMLHttpRequest() : xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")

    // Función de callback para manejar la respuesta de la API
    // xmlhttp.onreadystatechange = function () {

    //     if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

    //         // La respuesta se ha recibido correctamente
    //         let respuesta = xmlhttp.responseText;

    //         respuesta = JSON.parse(respuesta)

    //         // validamos el tipo de peticion para ejecutar una u otra funcion para devolver distintas respuestas con una misma funcion ajax
    //         switch (tipoPeticion) {

    //             case 'partidosDirecto':

    //                 partidosDirecto(respuesta)

    //                 break;
    //         }
    //     }
    // };

    // Realizar la petición a la API (en este caso, se utiliza la API de ejemplo 'https://ejemplo.com/api')
    //xmlhttp.open("GET", urlPeticion, true);

    // Configura las cabeceras personalizadas
    //xmlhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);


    //xmlhttp.send();
//}

/*** inicio de ejecuciones ****/
$(document).ready(function () {

    /* 
    *
    * ejecutamos la peticion y luego cada 1 minuto 
    * 
    */

    // hacerPeticion('partidosDirecto')

    // setInterval(() => {

    //     hacerPeticion('partidosDirecto')

    // }, 60000000);

    /* 
    *
    * ejecutamos la peticion y luego cada 1 minuto 
    * 
    */
})