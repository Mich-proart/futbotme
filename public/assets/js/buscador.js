const generateCardEquipos = (arrayEquipos, contentResponse) =>{

    console.log(arrayEquipos)

    jQuery('.num-rest-equipos').text(arrayEquipos.length)

    for (const iterator of arrayEquipos) {

        let response = `
        <li>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <img src="${urlBase}assets/images/img/club/escudo${iterator.clubId}.png" class="img-fluid rounded-start" alt="${iterator.nombreCorto}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">${iterator.tipo}</small></p>
                            <h3 class="card-title titulo-equ-text">${iterator.nombreCompleto}</h3>
                            <p class="card-text categoria-equ-text">${iterator.categoria}</p>
                            <p class="card-text localidad-equ-text">Localidad</p>
                        </div>
                    </div>
                </div>
            </div>
        </li>`

        jQuery(contentResponse).append(response);
        
    }
}

const generateCardJugadores = (arrayJugadores, contentResponse) =>{

    console.log(arrayJugadores)

    jQuery('.num-rest-jugadores').text(arrayJugadores.length)

    for (const iterator of arrayJugadores) {

        let response = `
        <li>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <img src="https://futbolme.com/static/img/club/escudo4466.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">${iterator.tipo}</small></p>
                            <h3 class="card-title titulo-equ-text">${iterator.nombre} ${iterator.apellidos}</h3>
                            <p class="card-text categoria-equ-text">Senior Masculino</p>
                            <p class="card-text localidad-equ-text">Localidad</p>
                        </div>
                    </div>
                </div>
            </div>
        </li>`

        jQuery(contentResponse).append(response);
        
    }
}


// buscador ajax
const buscadoResponse = (urlPeticion, formData) =>{

    jQuery.ajax({
        url: urlPeticion,
        type: 'POST',
        data: {
            formData
        },
        headers: {
             'X-CSRF-TOKEN': csrfToken
        },
        success: function(response) { 

            console.log(response)

            // vaciamos el contenedor para agregar resultados
            let contentResponse = jQuery('.listado-result-equipos-jugadores')

            jQuery(contentResponse).empty();

            // mostramos contenedor de resultados
            jQuery('.div-resultados-mobile').fadeIn("slow");

            // seteamos valores de las cards de resultados
            generateCardEquipos(response.equipos, contentResponse)

            generateCardJugadores(response.jugadores, contentResponse)
        }
    })               
}

$(document).ready(function () {

    // peticion del buscador
    $(document).on('keyup', '.input-text-buscador', function(){

        $(this).val().length > 2 && buscadoResponse(`${urlBase}buscador`, $(this).val())    
    })
})