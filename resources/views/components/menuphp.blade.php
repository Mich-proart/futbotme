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
);?>

<?php $iObj = json_decode($datos, true);?>

@include('components.components-menu.menudesktop')

@include('components.components-menu.menumobile')