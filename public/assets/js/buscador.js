const generateCardEquipos = (arrayEquipos) =>{

    jQuery('.num-rest-equipos').text(arrayEquipos.length)
}

const generateCardJugadores = (arrayJugadores) =>{

    jQuery('.num-rest-jugadores').text(arrayJugadores.length)
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

            // seteamos valores de las cards de resultados
            generateCardEquipos(response.equipos)

            generateCardJugadores(response.jugadores)
        }
    })               
}

$(document).ready(function () {

    // peticion del buscador
    $(document).on('keyup', '.input-text-buscador', function(){

        $(this).val().length > 2 && buscadoResponse(`${urlBase}buscador`, $(this).val())    
    })
})