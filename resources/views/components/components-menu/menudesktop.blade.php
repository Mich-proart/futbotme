<nav class="content-navbar flotante-menu-mobile bg-silver navbar-desktop remove-mobile pb-3">

    <div class="content-center-bar-flotante">

        <div class="center-bar-flotante-top">            

            <ul class="list-unstyled ul-parent mb-0 ul-todos-elements-menu pt-5">

                <?php foreach ( $menuStatic as $value) { ?>     

                    <li class="li-parent cursor-pointer py-1 position-relative">

                        <div class="content-li-parent d-flex align-items-center bg-greengris">

                            <div class="svg-content">

                                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <path d="M16 20.4868L22 12.4868L10 12.4868L16 20.4868Z" fill="#4E4E4E"/>

                                </svg>
                                                                     
                            </div>  

                            <p class="mb-0 me-4 fs-00"><?php echo $value['textoWeb'];?></p>                          

                        </div>

                        <?php if(isset($value['staticSubMenu'])){ ?>                            

                            <ul class="list-unstyled ul-children children-flotante" style="display:none;">

                                <?php foreach ($value['staticSubMenu'] as $element) { ?>                                                                                                              

                                    <li class="li-children">
                                                                                                                                                
                                        <div class="content-li-children d-flex align-items-center">

                                            <?php if($element['subMenu'] != 'off'){ ?>

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

                                            <?php }?>

                                            <div class="content-icon-bandera">                                                 
                                                
                                            </div>

                                            <?php echo $element['subMenu'] == 'on' ? '<p class="mb-0 me-4 fs-000">'.$element['texto'].'</p>' : '<p class="mb-0 ms-3 fs-000"><a class="enlace-unstyle color-black" href="'.$element['enlace'].'">'.$element['texto'].'</a></p>';?>                                                                        

                                        </div> 

                                        <ul class="list-unstyled ps-3 ul-children-children ocultar-icon">

                                            {{-- para hijos estaticos --}}
                                            <?php if(isset($element['fillStatics'])){ ?>

                                                <?php foreach ($element['fillStatics'] as $valueChildren) { ?>

                                                    <li>

                                                        <div class="d-flex align-items-center">

                                                            <a class="enlace-unstyle color-black fs-000" href="<?php echo $valueChildren['enlace'];?>"><p class="mb-0"><?php echo $valueChildren['texto'];?></p></a>

                                                        </div>                                

                                                    </li>   

                                                <?php }?>

                                            <?php }?>

                                            {{-- para padres que coinciden con los del json --}}
                                            <?php foreach ($iObj as $key => $values) { ?>                                                                                       

                                                <?php if($key == $element['claveJson']){?>

                                                    <?php foreach ($iObj[$key] as $keys => $elements) { ?>

                                                        <?php if(!isset($elements[0])){ ?>                                                    

                                                            <?php $stringParts = explode("-", $elements['nombre']);?>

                                                            <?php $nombreCut = (isset($stringParts[1])) && ($stringParts[1]) != '' ? $stringParts[1] : $elements['nombre'];?>

                                                            <?php $texto = strtolower($nombreCut);?>

                                                            <?php $nombre = ucfirst($texto);?>

                                                            <li>

                                                                <div class="d-flex align-items-center">
        
                                                                    <a class="enlace-unstyle color-black" href="<?php echo $elements['ruta'];?>">
                                                                        
                                                                        <p class="mb-0 fs-000"><?php echo $nombre;?></p>

                                                                    </a>
        
                                                                </div>                                
        
                                                            </li>  
                                                            
                                                        <?php }?>                                                    

                                                    <?php }?>

                                                <?php }?>

                                            <?php }?>

                                            {{-- para añadir hijos estaticos --}}
                                            <?php if($element['claveJson'] != ''){ ?>

                                                <?php if(isset($element['extrafillStatic'])){ ?>

                                                    <?php foreach ($element['extrafillStatic'] as $extrafillStatic) { ?>

                                                        <li>

                                                            <div class="d-flex align-items-center">

                                                                <a class="enlace-unstyle color-black fs-000" href="<?php echo $extrafillStatic['enlace'];?>"><p class="mb-0"><?php echo $extrafillStatic['texto'];?></p></a>

                                                            </div>                                

                                                        </li>   

                                                    <?php }?>

                                                <?php }?>

                                            <?php }?>                                                              

                                        </ul>

                                    </li>                                     

                                <?php }?>
                            
                            </ul>

                        <?php }else{ ?>

                            <ul class="list-unstyled ul-children children-flotante" style="display:none;">

                                <?php foreach ($iObj as $key => $values) { ?>   
                                    
                                    <?php if($value['claveMenuJson'] == $key){ ?>

                                        <?php foreach ($values as $keys => $elements) { ?>

                                            <?php if(isset($elements[0])){ ?>

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
                                                
                                                            <i style="" class="mx-3 <?php echo $elements[0]['nombreComunidad'] == 'SIN COMUNIDAD' ?  'pais flag'.$elements[0]['imagenPais'].'b' : 'comunidad flag'.$elements[0]['imagenComunidad'];?>"></i>
                                                            
                                                        </div>
                                                
                                                        <p class="mb-0 me-4 fs-000"><?php echo $keys?></p>
                                                
                                                    </div> 

                                                    <ul class="list-unstyled ps-3 ul-children-children ocultar-icon">
                                                        
                                                        <?php foreach ($elements as $llave => $itemsChlidrens) { ?>                                                                                                                

                                                            <?php $texto = strtolower($itemsChlidrens['nombre']);?>

                                                            <?php $nombre = ucfirst($texto);?>

                                                            <li>

                                                                <div class="d-flex align-items-center">

                                                                    <a class="enlace-unstyle color-black fs-000" href="<?php echo $itemsChlidrens['ruta'];?>"><p class="mb-0"><?php echo $nombre;?></p></a>

                                                                </div>                                

                                                            </li>   

                                                        <?php }?>
                                                
                                                    </ul>

                                                </li>

                                            <?php }else{ ?>
        

                                            <?php }?>

                                        <?php }?>                                                

                                    <?php }?>

                                <?php }?>

                            </ul>










































                        <?php }?>

                    </li>

                <?php }?>

            </ul>

        </div>
        
    </div>    

</nav>