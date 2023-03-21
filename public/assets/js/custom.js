$(document).ready(function () {

    //abrir menu mobile
    $(document).on('click','.content-icon-menu',function(){
        $('.content-navbar').fadeIn()        
        $('.bg-overlay-menu').fadeIn()
    })

    //cerrar menu mobile
    $(document).on('click','.cerrar-menu, .bg-overlay-menu',function(){
        $('.content-navbar').fadeOut()
        $('.bg-overlay-menu').fadeOut()
    })
})