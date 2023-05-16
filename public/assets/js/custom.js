$(document).ready(function () {

    // abrir menu mobile
    $(document).on('click','.content-icon-menu',function(){
        $('.content-navbar').fadeIn()        
        $('.bg-overlay-menu').fadeIn()
        $('body').addClass('overflow-y-hidden')
    })

    // cerrar menu mobile
    $(document).on('click','.cerrar-menu, .bg-overlay-menu',function(){
        $('.content-navbar').fadeOut()
        $('.bg-overlay-menu').fadeOut()
        $('body').removeClass('overflow-y-hidden')
    })

    // abrir y cerrar menu nivel parent
    $(document).on('click','.content-li-parent',function(){        
        
        if($(this).hasClass('girado')){

            $('.ul-children').fadeOut()
            $('.content-li-parent').removeClass('girado')
            $('.svg-content').find('svg').css('rotate','0deg')

            $(this).removeClass('girado')
            $(this).find('.svg-content').find('svg').css('rotate','0deg')
            $(this).closest('.li-parent').find('.ul-children').fadeOut()

        }else{
            
            $('.ul-children').fadeOut()
            $('.content-li-parent').removeClass('girado')
            $('.svg-content').find('svg').css('rotate','0deg')

            $(this).addClass('girado')
            is_mobile() ? $(this).find('.svg-content').find('svg').css('rotate','180deg') : $(this).find('.svg-content').find('svg').css('rotate','180deg')   
            $(this).closest('.li-parent').find('.ul-children').fadeIn()  
        }
    })

    // abrir y cerrar menu nivel childre
    $(document).on('click','.content-li-children',function(){

        if($(this).hasClass('abierto')){

            $('.ul-children-children').fadeOut()
            $('.content-li-children').removeClass('abierto')
            $('.content-icon-sub-sub-menu-manus').removeClass('ocultar-icon')
            $('.content-icon-sub-sub-menu-minus').addClass('ocultar-icon')    
    
            $(this).closest('.li-children').find('.ul-children-children').fadeOut()
            $(this).removeClass('abierto')
            $(this).find('.content-icon-sub-sub-menu-manus').removeClass('ocultar-icon')
            $(this).find('.content-icon-sub-sub-menu-minus').addClass('ocultar-icon')

        }else{

            $('.ul-children-children').fadeOut()
            $('.content-li-children').removeClass('abierto')
            $('.content-icon-sub-sub-menu-manus').removeClass('ocultar-icon')
            $('.content-icon-sub-sub-menu-minus').addClass('ocultar-icon')
    
            $(this).closest('.li-children').find('.ul-children-children').fadeIn()
            $(this).addClass('abierto')
            $(this).find('.content-icon-sub-sub-menu-manus').addClass('ocultar-icon')
            $(this).find('.content-icon-sub-sub-menu-minus').removeClass('ocultar-icon')
        }
    })

    // abrir y cerrar input del buscador
    $(document).on('click', '.content-buscador', function(){
        $('.content-input-buscador-mobile').fadeToggle("slow");
    })
})