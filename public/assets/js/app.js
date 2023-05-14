const scrollToTop = () =>{
    window.scrollTo({
      top: 0,
      behavior: 'smooth' // Desplazamiento suave
    });
}


$(document).ready(function () {

    jQuery(document).on('click', '.btn-flotante-arriba', function(){

        scrollToTop()
    })
})