// scroll top volver arriba
const scrollToTop = () =>{
    window.scrollTo({
      top: 0,
      behavior: 'smooth' // Desplazamiento suave
    });
}

// funcion con la que detectamos si estamos en http o https 
const is_htttps = () => (location.protocol === 'https:') ? true : false

$(document).ready(function () {

    // volver arriba
    jQuery(document).on('click', '.btn-flotante-arriba', function(){

        scrollToTop()
    })
})