const generateCardEquipos = (arrayEquipos, contentResponse) =>{

    console.log(arrayEquipos)

    jQuery('.num-rest-equipos').text(arrayEquipos.length)

    for (const iterator of arrayEquipos) {

        let response = `
        <li>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <a href="https://futbolme.loading.net/resultados-directo/equipo/${iterator.nombreCompleto}/${iterator.clubId}"> 
                            <img src="https://futbolme.com/static/img/club/escudo${iterator.clubId}.png" class="img-fluid rounded-start" alt="${iterator.nombreCorto}">
                        </a>
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
                        <a href="https://futbolme.loading.net/resultados-directo/jugador/${iterator.apodo}/${iterator.idJugador}"> 
                            <img src="https://futbolme.com/static/img/jugadores/jugador${iterator.idJugador}.jpg" class="img-fluid rounded-start" alt="...">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">${iterator.apodo}</small></p>
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
        beforeSend: function() {
            // Eliminamos lupa y reemplazamos por spinner
            $('.content-icon-buscador span').removeClass('icon-search p-2');
            $('.content-icon-buscador span').addClass('spinner-border spinner-border-sm p-3');
        },
        success: function(response) { 

            console.log(response)

            // vaciamos el contenedor para agregar resultados
            let contentResponse = jQuery('.listado-result-equipos-jugadores')

            jQuery(contentResponse).empty();

            // mostramos contenedor de resultados
            is_mobile() && jQuery('.div-resultados-mobile').fadeIn("slow");

            // seteamos valores de las cards de resultados
            generateCardEquipos(response.equipos, contentResponse)

            generateCardJugadores(response.jugadores, contentResponse)

            if(jQuery(response.equipos).length == 0) {
                if(jQuery(response.jugadores).length == 0){
                                    
                    jQuery('.div-resultados-mobile').css({
                        'bottom':'-115px',
                        'height':'50px'
                    })   

                    jQuery('.listado-result-equipos-jugadores').empty()

                    jQuery('.listado-result-equipos-jugadores').append('<li class="px-lg-4">No Resultados...</li>')
                }
            }else{

                jQuery('.div-resultados-mobile').css({
                    'bottom':'-615px',
                    'height':'550px'
                })  
            }
        },
        complete: function() {
            // Eliminamos spinner y reemplazamos por lupa
            $('.content-icon-buscador span').removeClass('spinner-border spinner-border-sm p-3');
            $('.content-icon-buscador span').addClass('icon-search p-2');
            //Mostramos el buscador cuando ya encontro
            $('.content-resultado-buscador').addClass('showbuscador');
        },
    })               
}

$(document).ready(function () {

    // peticion del buscador
    $(document).on('keyup', '.input-text-buscador', function(){

        $(this).val().length > 2 && buscadoResponse(`${urlBase}buscador`, $(this).val())    
    });
    //quitamos resultados del buscador 
    $('.numero-resultados .btn-close').on('click', function () {
        $('.content-resultado-buscador').removeClass('showbuscador');
        $('.input-text-buscador').val('');
    })
})