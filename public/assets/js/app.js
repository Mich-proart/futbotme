// scroll top volver arriba
const scrollToTop = () =>{
    window.scrollTo({
      top: 0,
      behavior: 'smooth' // Desplazamiento suave
    });
}

$(document).ready(function () {

    // volver arriba
    jQuery(document).on('click', '.btn-flotante-arriba', function(){

        scrollToTop()
    })
})