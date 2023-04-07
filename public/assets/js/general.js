$(document).ready(function () {

    // quitamos elementos en desktop y en mobile
    if(is_mobile()){

        $('.remove-mobile').remove()
        
    }else{

        $('.remove-desktop').remove()
    }

})

// verificamos si es mobile o no para eliminar elementos en la vista DESKTOP Y MOBILE
const is_mobile = () =>{

    let ventana_ancho = $(window).width();    

    if (ventana_ancho <= 820) {

        return true               
    }
}