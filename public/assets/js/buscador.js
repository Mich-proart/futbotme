const generateCardEquipos = (arrayEquipos, contentResponse) =>{

    console.log(arrayEquipos)

    jQuery('.num-rest-equipos').text(arrayEquipos.length)

    for (const iterator of arrayEquipos) {

        let response = `

        `

        jQuery(contentResponse).append(response);
        
    }
}

const generateCardJugadores = (arrayJugadores, contentResponse) =>{

    console.log(arrayJugadores)

    jQuery('.num-rest-jugadores').text(arrayJugadores.length)

    for (const iterator of arrayJugadores) {

        let response = `
        
        `

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