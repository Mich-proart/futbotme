// buscador 
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
        }
    })               
}

$(document).ready(function () {

    // peticion del buscador
    $(document).on('keyup', '.input-text-buscador', function(){
        
        buscadoResponse(`${urlBase}buscador`, $(this).val())    
    })
})