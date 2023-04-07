<nav class="container-fluid-custom content-navbar flotante-menu-mobile bg-silver navbar-desktop remove-mobile">

    <div class="content-center-bar-flotante">

        <div class="center-bar-flotante-top">            

            <ul class="list-unstyled ul-parent mb-0 ul-todos-elements-menu d-lg-flex">

                <?php foreach ( $menuStatic as $value) { ?>     

                    <li class="li-parent cursor-pointer py-1 position-relative">

                        <div class="content-li-parent d-flex align-items-center">

                            <?php echo $value['enlace'] == '' ? '<p class="mb-0">'.$value['textoFront'].'</p>' : '<p><a class="enlace-unstyle color-black" href="'.$value['enlace'].'">'.$value['textoFront'].'</a></p>';?>                            

                            <?php if($value['enlace'] == ''){ ?>

                                <div class="svg-content me-3 pb-1">

                                    <svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">

                                        <path d="M8.05811 6L0.0581055 0L0.0581055 12L8.05811 6Z" fill="#434242"/>

                                    </svg>                                    

                                </div>

                            <?php }?>

                        </div>

                        <?php if($value['enlace'] == ''){ ?>

                            <?php if($value['subMenu'] == 'on'){ ?>

                                <ul class="list-unstyled ul-children children-flotante" style="display:none;">

                                    <?php foreach ($iObj as $key => $values) { ?>
                                        
                                        <?php $indice = $key;?>

                                        <?php if($indice == $value['claveSubMenu']){?>

                                            <?php foreach ($iObj[$indice] as $keys => $element) { ?>

                                                <?php if(isset($element[0])){ ?>                                                    

                                                    <li class="li-children">
                                                                                                                                            
                                                        <div class="content-li-children d-flex align-items-center">

                                                            <div class="content-icon-sub-sub-menu-manus">

                                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">

                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 15.5V10.5H16.5V15.5H21.5V16.5H16.5V21.5H15.5V16.5H10.5V15.5H15.5Z" fill="#434242"/>

                                                                    <path d="M15.5 10.5V10.25H15.25V10.5H15.5ZM15.5 15.5V15.75H15.75V15.5H15.5ZM16.5 10.5H16.75V10.25H16.5V10.5ZM16.5 15.5H16.25V15.75H16.5V15.5ZM21.5 15.5H21.75V15.25H21.5V15.5ZM21.5 16.5V16.75H21.75V16.5H21.5ZM16.5 16.5V16.25H16.25V16.5H16.5ZM16.5 21.5V21.75H16.75V21.5H16.5ZM15.5 21.5H15.25V21.75H15.5V21.5ZM15.5 16.5H15.75V16.25H15.5V16.5ZM10.5 16.5H10.25V16.75H10.5V16.5ZM10.5 15.5V15.25H10.25V15.5H10.5ZM15.25 10.5V15.5H15.75V10.5H15.25ZM16.5 10.25H15.5V10.75H16.5V10.25ZM16.75 15.5V10.5H16.25V15.5H16.75ZM21.5 15.25H16.5V15.75H21.5V15.25ZM21.75 16.5V15.5H21.25V16.5H21.75ZM16.5 16.75H21.5V16.25H16.5V16.75ZM16.75 21.5V16.5H16.25V21.5H16.75ZM15.5 21.75H16.5V21.25H15.5V21.75ZM15.25 16.5V21.5H15.75V16.5H15.25ZM10.5 16.75H15.5V16.25H10.5V16.75ZM10.25 15.5V16.5H10.75V15.5H10.25ZM15.5 15.25H10.5V15.75H15.5V15.25Z" fill="#434242"/>

                                                                </svg>

                                                            </div>

                                                            <div class="content-icon-sub-sub-menu-minus ocultar-icon">

                                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">

                                                                    <path d="M10.5 16.5H10V17H10.5V16.5ZM21.5 16.5V17H22V16.5H21.5ZM10.5 15.5V15H10V15.5H10.5ZM21.5 15.5H22V15H21.5V15.5ZM10.5 17H21.5V16H10.5V17ZM10 15.5V16.5H11V15.5H10ZM21.5 15H10.5V16H21.5V15ZM22 16.5V15.5H21V16.5H22Z" fill="#434242"/>

                                                                </svg>                                            

                                                            </div>

                                                            <div class="content-icon-bandera"> 

                                                                <i style="" class="mx-3 <?php echo $element[0]['nombreComunidad'] == 'SIN COMUNIDAD' ?  'pais flag'.$element[0]['imagenPais'].'b' : 'comunidad flag'.$element[0]['imagenComunidad'];?>"></i>   
                                                                
                                                            </div>

                                                            <p class="mb-0"><?php echo $keys;?></p>  

                                                        </div> 

                                                        <ul class="list-unstyled ps-3 ul-children-children ocultar-icon">

                                                            <?php foreach ($element as $clave => $items) { ?>

                                                                <li>

                                                                    <div class="d-flex align-items-center">

                                                                        <p class="mb-0"> <a class="enlace-unstyle color-black" href="<?php echo $items['ruta'];?>"><?php echo $items['nombre'];?></a></p>  

                                                                    </div>                                

                                                                </li>   

                                                            <?php }?>

                                                        </ul>

                                                    </li>                            

                                                <?php }else{ ?>

                                                    {{-- children que no tiene subchildren --}}
                                                    <li class="li-children"><p class="mb-0"><a class="enlace-unstyle color-black" href="<?php echo $element['ruta'];?>"><?php echo $element['nombre'];?></a></p></li>                                                                                                        

                                                <?php }?>

                                            <?php }?>

                                        <?php }?>

                                    <?php }?>

                                </ul>

                            <?php }?>

                        <?php }?>

                    </li>

                <?php }?>

            </ul>

        </div>
        
    </div>    

</nav>