<?php $datos = file_get_contents(base_path()."/resources/views/components/menu.json");?>

<?php $menuStatic = array(
    [
        'textoFront' => 'Ascensos y descensos',
        'enlace' => '/ascensos-y-descensos/nacional',
        'subMenu' => 'off',
        'claveSubMenu' => '',

    ],
    [
        'textoFront' => '1ª',
        'enlace' => '/resultados-directo/torneo/primera-division/1/',
        'subMenu' => 'off',
        'claveSubMenu' => '',
    ],
    [
        'textoFront' => 'Promoción a 1ª',
        'enlace' => '/resultados-directo/torneo/espana-segunda-division-promocion-de-ascenso/239/',
        'subMenu' => 'off',
        'claveSubMenu' => '',
    ],
    [
        'textoFront' => '2ª',
        'enlace' => '/resultados-directo/torneo/segunda-division/2/',
        'subMenu' => 'off',
        'claveSubMenu' => '',
    ],
    [
        'textoFront' => 'Promoción a 2ª',
        'enlace' => '/resultados-directo/torneo/espana-primera-division-rfef-promocion-de-ascenso/3137/',
        'subMenu' => 'off',
        'claveSubMenu' => '',
    ],
    [
        'textoFront' => '1ª Fed.',
        'enlace' => '',
        'subMenu' => 'on',
        'claveSubMenu' => 'primeraRFEF',
        'bandera' => ''
    ],
    [
        'textoFront' => 'Promoción a 1ª Fed.',
        'enlace' => '/resultados-directo/torneo/espana-promocion-de-ascenso-1-rfef/3127/',
        'subMenu' => 'off',
        'claveSubMenu' => '',
    ],
    [
        'textoFront' => '2ª Fed.',
        'enlace' => '',
        'subMenu' => 'on',
        'claveSubMenu' => 'segundaRFEF',
        'bandera' => ''
    ],
    [
        'textoFront' => 'Permanencia 2ª Fed.',
        'enlace' => '/resultados-directo/torneo/espana-promocion-de-permanencia.2-rfef/3128/',
        'subMenu' => 'off',
        'claveSubMenu' => '',
    ],
    [
        'textoFront' => '3ª Fed.',
        'enlace' => '',
        'subMenu' => 'on',
        'claveSubMenu' => 'terceraRFEF',
        'bandera' => ''
    ],
    [
        'textoFront' => 'Promoción a 2ª Fed.',
        'enlace' => '',
        'subMenu' => 'on',
        'claveSubMenu' => 'promo2RFEF',
        'bandera' => ''
    ],
    [
        'textoFront' => 'Autonómicas',
        'enlace' => '',
        'subMenu' => 'on',
        'claveSubMenu' => 'autonomica',
        'bandera' => ''
    ],
    [
        'textoFront' => 'Torneos',
        'enlace' => '',
        'subMenu' => 'on',
        'claveSubMenu' => 'EspecialTorneos',
        'bandera' => ''

    ],
    [
        'textoFront' => 'Europa',
        'enlace' => '',
        'subMenu' => 'on',
        'claveSubMenu' => 'europa',
        'bandera' => ''
    ],
    [
        'textoFront' => 'Juvenil',
        'enlace' => '',
        'subMenu' => 'on',
        'claveSubMenu' => 'juvenil',
        'bandera' => ''
    ],
    [
        'textoFront' => 'Femenino',
        'enlace' => '',
        'subMenu' => 'on',
        'claveSubMenu' => 'femenino',
        'bandera' => ''
    ]    
);?>

<?php $iObj = json_decode($datos, true);?>

@include('components.components-menu.menudesktop')

@include('components.components-menu.menumobile')