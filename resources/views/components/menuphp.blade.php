<?php $datos = file_get_contents(base_path()."/resources/views/components/menu.json");?>

<?php $menuStatic = array(

    [
        'textoWeb' => 'Ligas Españolas',        
        'claveMenu' => 'ligasEspanholas',        
        'staticSubMenu' => array(
            [
                'claveJson' => '',
                'subMenu' => 'off',
                'texto' => '1ª División',
                'enlace' => '/resultados-directo/torneo/primera-division/1/',
                'bandera' => '',                

            ],
            [
                'claveJson' => '',
                'subMenu' => 'on',
                'texto' => '2ª División',
                'enlace' => '',
                'bandera' => '',
                'fillStatics' => array(
                    [
                        'texto' => '2ª División',
                        'enlace' => '/resultados-directo/torneo/segunda-division/2/',
                    ],
                    [
                        'texto' => 'Ascenso a 1ª División',
                        'enlace' => '/resultados-directo/torneo/espana-segunda-division-promocion-de-ascenso/239/',
                    ],                            
                )
            ],
            [                
                'claveJson' => 'primeraRFEF',
                'subMenu' => 'on',
                'texto' => '1ª Federación',
                'enlace' => '',
                'bandera' => '', 
                'extrafillStatic' => array(
                    [
                        'texto' => 'Promociones y Eliminatorias',
                        'enlace' => '/resultados-directo/torneo/espana-promocion-de-ascenso-1-rfef/3127/',
                    ],
                )               
            ],
            [                
                'claveJson' => 'segundaRFEF',
                'subMenu' => 'on',
                'texto' => '2ª Federación',
                'enlace' => '',
                'bandera' => '',    
                'extrafillStatic' => array(
                    [
                        'texto' => 'Promociones',
                        'enlace' => '/resultados-directo/torneo/espana-promocion-de-permanencia.2-rfef/3128/',
                    ],
                )              
            ],
            [                
                'claveJson' => 'terceraRFEF',
                'subMenu' => 'on',
                'texto' => '3ª Federación',
                'enlace' => '',
                'bandera' => '',   
                'extrafillStatic' => array(
                    [
                        'texto' => 'Promociones',
                        'enlace' => '/ascensos-y-descensos/nacional',
                    ],
                )                 
            ],            
        )
    ],
    [
        'textoWeb' => 'Ligas Autonómicas',        
        'claveMenuJson' => 'autonomica',        
        'subMenuJson' => 'on',
    ],  
    [
        'textoWeb' => 'Torneos RFEF - FIFA - UEFA',        
        'claveMenu' => 'RFEFIFAUEFA',  
        'staticSubMenu' => array(
            [                
                'claveJson' => 'RFEF',
                'subMenu' => 'on',
                'texto' => 'RFEF',
                'enlace' => '',
                'bandera' => '',                                   
            ], 
            [                
                'claveJson' => 'FIFA',
                'subMenu' => 'on',
                'texto' => 'FIFA',
                'enlace' => '',
                'bandera' => '',                                   
            ], 
            [                
                'claveJson' => 'UEFA',
                'subMenu' => 'on',
                'texto' => 'UEFA',
                'enlace' => '',
                'bandera' => '',                                   
            ], 
        )
    ], 
    [
        'textoWeb' => 'Fútbol Juvenil España',        
        'claveMenu' => 'FutbolJuvenilEspanha',  
        'staticSubMenu' => array(
            [                
                'claveJson' => 'juvenil',
                'subMenu' => 'on',
                'texto' => 'División de Honor',
                'enlace' => '',
                'bandera' => '', 
                'idJsonArray' => array(286,285,32,27,28,38,39,40,96)                                  
            ], 
 
        )
    ], 
    [
        'textoWeb' => 'Fútbol Femenino España',        
        'claveMenu' => 'FutbolFemeninoEspanha',  
        'staticSubMenu' => array(
            [                
                'claveJson' => 'femenino',
                'subMenu' => 'on',
                'texto' => '1ª División',
                'enlace' => '',
                'bandera' => '', 
                'idJsonArray' => array(286,285,32,27,28,38,39,40,96)                                  
            ], 
 
        )
    ],  
    [
        'textoWeb' => 'Fútbol Europa',        
        'claveMenuJson' => 'europa',        
        'subMenuJson' => 'on',
    ], 





    // [
    //     'textoFront' => 'Ascensos y descensos',
    //     'enlace' => '/ascensos-y-descensos/nacional',
    //     'subMenu' => 'off',
    //     'claveSubMenu' => '',

    // ],
    // [
    //     'textoFront' => '1ª',
    //     'enlace' => '/resultados-directo/torneo/primera-division/1/',
    //     'subMenu' => 'off',
    //     'claveSubMenu' => '',
    // ],
    // [
    //     'textoFront' => 'Promoción a 1ª',
    //     'enlace' => '/resultados-directo/torneo/espana-segunda-division-promocion-de-ascenso/239/',
    //     'subMenu' => 'off',
    //     'claveSubMenu' => '',
    // ],
    // [
    //     'textoFront' => '2ª',
    //     'enlace' => '/resultados-directo/torneo/segunda-division/2/',
    //     'subMenu' => 'off',
    //     'claveSubMenu' => '',
    // ],
    // [
    //     'textoFront' => 'Promoción a 2ª',
    //     'enlace' => '/resultados-directo/torneo/espana-primera-division-rfef-promocion-de-ascenso/3137/',
    //     'subMenu' => 'off',
    //     'claveSubMenu' => '',
    // ],
    // [
    //     'textoFront' => '1ª Fed.',
    //     'enlace' => '',
    //     'subMenu' => 'on',
    //     'claveSubMenu' => 'primeraRFEF',
    //     'bandera' => ''
    // ],
    // [
    //     'textoFront' => 'Promoción a 1ª Fed.',
    //     'enlace' => '/resultados-directo/torneo/espana-promocion-de-ascenso-1-rfef/3127/',
    //     'subMenu' => 'off',
    //     'claveSubMenu' => '',
    // ],
    // [
    //     'textoFront' => '2ª Fed.',
    //     'enlace' => '',
    //     'subMenu' => 'on',
    //     'claveSubMenu' => 'segundaRFEF',
    //     'bandera' => ''
    // ],
    // [
    //     'textoFront' => 'Permanencia 2ª Fed.',
    //     'enlace' => '/resultados-directo/torneo/espana-promocion-de-permanencia.2-rfef/3128/',
    //     'subMenu' => 'off',
    //     'claveSubMenu' => '',
    // ],
    // [
    //     'textoFront' => '3ª Fed.',
    //     'enlace' => '',
    //     'subMenu' => 'on',
    //     'claveSubMenu' => 'terceraRFEF',
    //     'bandera' => ''
    // ],
    // [
    //     'textoFront' => 'Ligas Españolas',
    //     'enlace' => '',
    //     'subMenu' => 'on',
    //     'claveSubMenu' => 'primeraRFEF',
    //     'bandera' => '',
    //     'staticSubMenu' => array(
    //         [
    //             'texto' => '1ª División',
    //             'enlace' => '/resultados-directo/torneo/primera-division/1/',
    //             'bandera' => '',
    //             'subfillKey' => array(
    //                 [
                        
    //                 ]
    //             )
    //         ],
    //         [
    //             'texto' => '2ª División',
    //             'enlace' => '/resultados-directo/torneo/segunda-division/2/',
    //             'bandera' => '',
    //         ]
    //     )
    // ],
    // [
    //     'textoFront' => 'Ligas Autonómicas',
    //     'enlace' => '',
    //     'subMenu' => 'on',
    //     'claveSubMenu' => 'autonomica',
    //     'bandera' => ''
    // ],
    // [
    //     'textoFront' => 'Torneos RFEF - FIFA - UEFA',
    //     'enlace' => '',
    //     'subMenu' => 'on',
    //     'claveSubMenu' => 'EspecialTorneos',
    //     'bandera' => ''

    // ],
    // [
    //     'textoFront' => 'Fútbol Juvenil España',
    //     'enlace' => '',
    //     'subMenu' => 'on',
    //     'claveSubMenu' => 'juvenil',
    //     'bandera' => ''
    // ],
    // [
    //     'textoFront' => 'Fútbol Femenino España',
    //     'enlace' => '',
    //     'subMenu' => 'on',
    //     'claveSubMenu' => 'femenino',
    //     'bandera' => ''
    // ],  
    // [
    //     'textoFront' => 'Fútbol Europa',
    //     'enlace' => '',
    //     'subMenu' => 'on',
    //     'claveSubMenu' => 'europa',
    //     'bandera' => ''
    // ]  
);?>

<?php $iObj = json_decode($datos, true);?>

@include('components.components-menu.menudesktop')

@include('components.components-menu.menumobile')