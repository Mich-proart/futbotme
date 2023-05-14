<nav class="content-navbar flotante-menu-mobile bg-silver navbar-mobile remove-desktop" style="display:none;">

    {{-- cerrar menu mobile --}}
    <div class="content-top-bar-flotante d-flex align-items-center justify-content-end py-1 border-bottom-complet container-fluid-custom">                        

        <div class="px-2 cursor-pointer py-2 cerrar-menu">

            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3249 0.558362C10.6333 0.249987 11.1333 0.249987 11.4416 0.558362C11.75 0.866736 11.75 1.36671 11.4416 1.67508L7.1167 6.00002L11.4416 10.3249C11.75 10.6333 11.75 11.1333 11.4416 11.4416C11.1333 11.75 10.6333 11.75 10.3249 11.4416L5.99998 7.11674L1.67508 11.4416C1.36671 11.75 0.866736 11.75 0.558362 11.4416C0.249987 11.1333 0.249987 10.6333 0.558362 10.3249L4.88325 6.00002L0.558365 1.67517C0.249989 1.36679 0.249987 0.866818 0.558361 0.558442C0.866734 0.250066 1.36671 0.250064 1.67508 0.558437L5.99998 4.8833L10.3249 0.558362Z" fill="#025325"/>

            </svg>                    
            
        </div>

    </div>   
            
    <div class="content-center-bar-flotante">

        <div class="center-bar-flotante-top">            

            <ul class="list-unstyled ul-parent mb-0 ul-todos-elements-menu">

                <?php foreach ( $menuStatic as $value) { ?>     

                    <li class="li-parent cursor-pointer py-1 position-relative">

                        <div class="content-li-parent d-flex align-items-center bg-greengris">
                            
                            <div class="svg-content">
                                
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    
                                    <path d="M16.1445 20.6475L22.1445 12.6475L10.1445 12.6475L16.1445 20.6475Z" fill="#4E4E4E"/>
                                    
                                </svg>                                                                       
                                
                            </div>                            

                            <p class="mb-0 fs-01"><?php echo $value['textoWeb'];?></p>

                        </div>

                        <?php if(isset($value['staticSubMenu'])){ ?>                            

                            <ul class="list-unstyled ul-children children-flotante" style="display:none;">

                                <?php foreach ($value['staticSubMenu'] as $element) { ?>                                                                                                              

                                    <li class="li-children">
                                                                                                                                                
                                        <div class="content-li-children d-flex align-items-center">

                                            <?php if($element['subMenu'] != 'off'){ ?>

                                                <div class="content-icon-sub-sub-menu-manus">

                                                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">

                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6094 16.1475V11.1475H16.6094V16.1475H21.6094V17.1475H16.6094V22.1475H15.6094V17.1475H10.6094V16.1475H15.6094Z" fill="#4E4E4E"/>

                                                        <path d="M15.6094 11.1475V10.8975H15.3594V11.1475H15.6094ZM15.6094 16.1475V16.3975H15.8594V16.1475H15.6094ZM16.6094 11.1475H16.8594V10.8975H16.6094V11.1475ZM16.6094 16.1475H16.3594V16.3975H16.6094V16.1475ZM21.6094 16.1475H21.8594V15.8975H21.6094V16.1475ZM21.6094 17.1475V17.3975H21.8594V17.1475H21.6094ZM16.6094 17.1475V16.8975H16.3594V17.1475H16.6094ZM16.6094 22.1475V22.3975H16.8594V22.1475H16.6094ZM15.6094 22.1475H15.3594V22.3975H15.6094V22.1475ZM15.6094 17.1475H15.8594V16.8975H15.6094V17.1475ZM10.6094 17.1475H10.3594V17.3975H10.6094V17.1475ZM10.6094 16.1475V15.8975H10.3594V16.1475H10.6094ZM15.3594 11.1475V16.1475H15.8594V11.1475H15.3594ZM16.6094 10.8975H15.6094V11.3975H16.6094V10.8975ZM16.8594 16.1475V11.1475H16.3594V16.1475H16.8594ZM21.6094 15.8975H16.6094V16.3975H21.6094V15.8975ZM21.8594 17.1475V16.1475H21.3594V17.1475H21.8594ZM16.6094 17.3975H21.6094V16.8975H16.6094V17.3975ZM16.8594 22.1475V17.1475H16.3594V22.1475H16.8594ZM15.6094 22.3975H16.6094V21.8975H15.6094V22.3975ZM15.3594 17.1475V22.1475H15.8594V17.1475H15.3594ZM10.6094 17.3975H15.6094V16.8975H10.6094V17.3975ZM10.3594 16.1475V17.1475H10.8594V16.1475H10.3594ZM15.6094 15.8975H10.6094V16.3975H15.6094V15.8975Z" fill="#4E4E4E"/>

                                                    </svg>                                                        

                                                </div>

                                                <div class="content-icon-sub-sub-menu-minus ocultar-icon">

                                                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">

                                                        <path d="M10.6445 17.1475H10.1445V17.6475H10.6445V17.1475ZM21.6445 17.1475V17.6475H22.1445V17.1475H21.6445ZM10.6445 16.1475V15.6475H10.1445V16.1475H10.6445ZM21.6445 16.1475H22.1445V15.6475H21.6445V16.1475ZM10.6445 17.6475H21.6445V16.6475H10.6445V17.6475ZM10.1445 16.1475V17.1475H11.1445V16.1475H10.1445ZM21.6445 15.6475H10.6445V16.6475H21.6445V15.6475ZM22.1445 17.1475V16.1475H21.1445V17.1475H22.1445Z" fill="#4E4E4E"/>
                                                        
                                                    </svg>
                                                                                                
                                                </div>

                                            <?php }?>

                                            <div class="content-icon-bandera"> 

                                                {{-- <i style="" class="mx-3 <?php //echo $element[0]['nombreComunidad'] == 'SIN COMUNIDAD' ?  'pais flag'.$element[0]['imagenPais'].'b' : 'comunidad flag'.$element[0]['imagenComunidad'];?>"></i>    --}}
                                                
                                            </div>

                                            <?php echo $element['subMenu'] == 'on' ? '<p class="mb-0 fs-00">'.$element['texto'].'</p>' : '<p class="mb-0"><a class="enlace-unstyle color-black fs-00 ms-3" href="'.$element['enlace'].'">'.$element['texto'].'</a></p>';?>                                                                        

                                        </div> 

                                        <ul class="list-unstyled ps-3 ul-children-children ocultar-icon">

                                            {{-- para hijos estaticos --}}
                                            <?php if(isset($element['fillStatics'])){ ?>

                                                <?php foreach ($element['fillStatics'] as $valueChildren) { ?>

                                                    <li>

                                                        <div class="d-flex align-items-center">

                                                            <a class="enlace-unstyle color-black" href="<?php echo $valueChildren['enlace'];?>"><p class="mb-0 fs-00"><?php echo $valueChildren['texto'];?></p></a>

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
                                                                        
                                                                        <p class="mb-0 fs-00"><?php echo $nombre;?></p>

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

                                                                <a class="enlace-unstyle color-black" href="<?php echo $extrafillStatic['enlace'];?>"><p class="mb-0 fs-00"><?php echo $extrafillStatic['texto'];?></p></a>

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
                                                
                                                            <i style="" class="ms-0 me-3 <?php echo $elements[0]['nombreComunidad'] == 'SIN COMUNIDAD' ?  'pais flag'.$elements[0]['imagenPais'].'b' : 'comunidad flag'.$elements[0]['imagenComunidad'];?>"></i>
                                                            
                                                        </div>
                                                
                                                        <p class="mb-0 fs-00"><?php echo $keys?></p>
                                                
                                                    </div> 

                                                    <ul class="list-unstyled ps-3 ul-children-children ocultar-icon">
                                                        
                                                        <?php foreach ($elements as $llave => $itemsChlidrens) { ?>                                                                                                                

                                                            <?php $texto = strtolower($itemsChlidrens['nombre']);?>

                                                            <?php $nombre = ucfirst($texto);?>

                                                            <li>

                                                                <div class="d-flex align-items-center">

                                                                    <a class="enlace-unstyle color-black" href="<?php echo $itemsChlidrens['ruta'];?>"><p class="mb-0 fs-00"><?php echo $nombre;?></p></a>

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

        <div class="center-bar-flotante-center">

            <ul class="list-unstyled ps-5 mb-0 border-top-complet border-bottom-complet py-2">

                <li>

                    <div class="d-flex align-items-center">

                        <div class="svg-content">

                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <path d="M14.591 10.577H8.64789C7.86486 10.577 7.22764 11.2129 7.22764 11.9951V20.9085C7.22764 21.6906 7.86488 22.3266 8.64823 22.3266H23.3519C24.135 22.3266 24.7722 21.6906 24.7722 20.9085V11.9951V11.8951H24.7684C24.7168 11.1594 24.101 10.577 23.3516 10.577H16.5768L19.3422 7.42852L19.3423 7.42844C19.4012 7.36124 19.4248 7.27069 19.4124 7.18239C19.4123 7.1823 19.4123 7.1822 19.4123 7.18211L19.3133 7.1962C19.3041 7.13034 19.2681 7.07297 19.2147 7.03903M14.591 10.577L18.7825 7.01791C18.8423 6.94971 18.9307 6.91386 19.0141 6.9034C19.0978 6.8929 19.1921 6.90595 19.2685 6.95475M14.591 10.577L11.8277 7.43158L11.8273 7.43121C11.7688 7.36386 11.745 7.27376 11.7576 7.18516L11.8566 7.19925M14.591 10.577L12.3873 7.02056C12.3275 6.95237 12.239 6.91656 12.1557 6.90611C12.072 6.89562 11.9776 6.90864 11.9012 6.95754L11.9011 6.9576C11.8221 7.00839 11.7705 7.09209 11.7575 7.18544L11.8566 7.19925M19.2147 7.03903L19.2685 6.95475M19.2147 7.03903C19.11 6.97216 18.9366 6.99388 18.8577 7.08384L19.2685 6.95475M19.2147 7.03903L19.2684 6.95465C19.2684 6.95468 19.2685 6.95471 19.2685 6.95475M11.8566 7.19925C11.8477 7.26137 11.8647 7.32179 11.9028 7.36558L12.3122 7.08655C12.2333 6.9966 12.0595 6.97487 11.9552 7.04174C11.9018 7.07603 11.8657 7.1334 11.8566 7.19925ZM23.3739 21.6021H23.3516H8.64823C8.2647 21.6021 7.95295 21.2906 7.95295 20.9081V11.9954C7.95295 11.6129 8.2647 11.3014 8.64823 11.3014H23.3519C23.7355 11.3014 24.0472 11.6126 24.0472 11.9951V20.9085C24.0472 21.2837 23.7473 21.5905 23.3739 21.6021Z" fill="#434242" stroke="#434242" stroke-width="0.2"/>

                                <path d="M19.5421 12.1275H10.0059C9.28094 12.1275 8.69614 12.747 8.69614 13.4947V19.4297C8.69614 20.1774 9.28094 20.7969 10.0059 20.7969H19.5421C20.2671 20.7969 20.8519 20.1774 20.8519 19.4297V13.4947C20.8519 12.747 20.2671 12.1275 19.5421 12.1275ZM19.5421 20.1746H10.0059C9.62175 20.1746 9.29939 19.8436 9.29939 19.4297V13.4947C9.29939 13.0808 9.62175 12.7498 10.0059 12.7498H19.5418C19.9259 12.7498 20.2483 13.0808 20.2483 13.4947V19.4297C20.2483 19.8437 19.9259 20.1746 19.5421 20.1746Z" fill="#434242" stroke="#434242" stroke-width="0.2"/>

                                <path d="M22.8596 19.1128V19.1129C22.8596 19.3953 22.6295 19.6253 22.3463 19.6253C22.063 19.6253 21.8329 19.3953 21.8329 19.1129C21.8329 18.8305 22.063 18.6005 22.3463 18.6005C22.6296 18.6005 22.8599 18.8306 22.8596 19.1128ZM22.3463 17.9779C21.72 17.9779 21.2096 18.4872 21.2096 19.1129C21.2096 19.7386 21.72 20.2479 22.3463 20.2479C22.9725 20.2479 23.4829 19.7386 23.4829 19.1129C23.4829 18.4872 22.9725 17.9779 22.3463 17.9779Z" fill="#434242" stroke="#434242" stroke-width="0.2"/>

                                <path d="M23.3404 15.5488H21.5211C21.4349 15.5488 21.3554 15.5779 21.2971 15.6361C21.2388 15.6943 21.2096 15.7738 21.2096 15.8599C21.2096 15.9461 21.2388 16.0256 21.2971 16.0838C21.3554 16.142 21.4349 16.1711 21.5211 16.1711H23.3404C23.4266 16.1711 23.5061 16.142 23.5644 16.0838C23.6227 16.0256 23.6519 15.9461 23.6519 15.8599C23.6519 15.7738 23.6227 15.6943 23.5644 15.6361C23.5061 15.5779 23.4266 15.5488 23.3404 15.5488Z" fill="#434242" stroke="#434242" stroke-width="0.2"/>

                                <path d="M23.3404 14.493H21.5211C21.4349 14.493 21.3554 14.5222 21.2971 14.5804C21.2388 14.6386 21.2096 14.7181 21.2096 14.8042C21.2096 14.8903 21.2388 14.9698 21.2971 15.028C21.3554 15.0862 21.4349 15.1153 21.5211 15.1153H23.3404C23.4266 15.1153 23.5061 15.0862 23.5644 15.028C23.6227 14.9698 23.6519 14.8903 23.6519 14.8042C23.6519 14.7181 23.6227 14.6386 23.5644 14.5804C23.5061 14.5222 23.4266 14.493 23.3404 14.493Z" fill="#434242" stroke="#434242" stroke-width="0.2"/>

                            </svg>                                                               

                        </div>

                        <p class="mb-0"><a href="{{ url('/partidos')}}" class="enlace-unstyle color-black fs-01">Partidos Televisados</a></p>  

                    </div>                    

                </li>

                <li>

                    <div class="d-flex align-items-center">

                        <div class="svg-content">

                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4023 11.9803C12.5656 11.8187 12.8286 11.8187 12.9919 11.9803L15.4989 14.4621C15.7749 14.7353 15.7749 15.1812 15.4989 15.4544C15.2269 15.7237 14.7887 15.7237 14.5166 15.4544L13.3988 14.3479V19.6102C13.3988 19.9977 13.0847 20.3119 12.6971 20.3119C12.3096 20.3119 11.9954 19.9977 11.9954 19.6102V14.3479L10.8776 15.4544C10.6055 15.7237 10.1673 15.7237 9.89526 15.4544C9.61927 15.1812 9.61927 14.7353 9.89526 14.4621L12.4023 11.9803Z" fill="#434242"/>

                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5977 20.0199C19.4344 20.1815 19.1714 20.1815 19.0081 20.0199L16.5011 17.5381C16.2251 17.2649 16.2251 16.819 16.5011 16.5458C16.7731 16.2764 17.2113 16.2764 17.4834 16.5458L18.6012 17.6523L18.6012 12.39C18.6012 12.0024 18.9153 11.6882 19.3029 11.6882C19.6904 11.6882 20.0046 12.0024 20.0046 12.39L20.0046 17.6523L21.1224 16.5458C21.3945 16.2764 21.8327 16.2764 22.1047 16.5458C22.3807 16.819 22.3807 17.2649 22.1047 17.5381L19.5977 20.0199Z" fill="#434242"/>

                            </svg>                                                                                             

                        </div>

                        <p class="mb-0"><a href="{{ url('/ascensos-y-descensos/nacional')}}" class="enlace-unstyle color-black fs-01">Ascensos y descensos</a></p>  

                    </div>                    

                </li>

                <li>

                    <div class="d-flex align-items-center">

                        <div class="svg-content">

                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <path d="M18.0796 14.6347C17.9337 14.3445 17.5536 14.1447 17.2324 14.1904C16.8077 14.2503 16.3792 14.314 15.9539 14.3788C15.6327 14.4278 15.3256 14.7295 15.2706 15.0502C15.1976 15.4738 15.1268 15.9007 15.0588 16.3237C15.0076 16.6434 15.2003 17.0267 15.4873 17.1781C15.8663 17.3784 16.249 17.5761 16.6291 17.7699C16.9166 17.9158 17.3386 17.8516 17.5705 17.6273C17.8771 17.3311 18.1842 17.0299 18.4869 16.7294C18.7161 16.5018 18.7891 16.0809 18.6486 15.7907C18.4629 15.4068 18.2718 15.0202 18.0791 14.6358L18.0796 14.6347Z" fill="#434242"/>

                                <path d="M16.698 9C12.8321 9 9.698 12.1341 9.698 16C9.698 19.8659 12.8321 23 16.698 23C20.5639 23 23.698 19.8659 23.698 16C23.698 12.1341 20.5639 9 16.698 9ZM21.2151 19.1984C20.6875 19.2218 20.1414 19.2403 19.5822 19.2539C19.1597 19.2637 18.6876 19.5958 18.5427 19.9808C18.35 20.4893 18.1583 20.9772 17.9705 21.4346C17.8578 21.7128 17.9324 22.0401 18.1267 22.2562C17.6672 22.3608 17.1891 22.4163 16.698 22.4163C16.1747 22.4163 15.6662 22.3531 15.1789 22.235C15.3716 22.0205 15.4468 21.6965 15.3368 21.4188C15.1522 20.9576 14.9643 20.467 14.777 19.9557C14.6355 19.5697 14.1683 19.2316 13.7474 19.2163C13.1909 19.1951 12.6475 19.17 12.1243 19.1401C11.8166 19.1227 11.5128 19.2925 11.3467 19.5414C10.7973 18.7132 10.4358 17.75 10.3209 16.7117C10.61 16.8478 11.0015 16.7977 11.2487 16.5625C11.6048 16.2222 11.9778 15.8715 12.3649 15.5143C12.6715 15.2317 12.8038 14.6671 12.6524 14.2729C12.4618 13.7752 12.2789 13.2868 12.1047 12.8115C12.005 12.5403 11.7556 12.3334 11.485 12.2599C12.1989 11.2667 13.1898 10.4854 14.3447 10.0302C14.3169 10.3307 14.4558 10.6629 14.7171 10.8393C15.1538 11.1328 15.6041 11.4399 16.0631 11.7579C16.41 11.9996 16.9915 12.0018 17.3427 11.7644C17.8071 11.4502 18.2623 11.1475 18.7045 10.8578C18.9713 10.6825 19.1145 10.3487 19.0894 10.0465C20.2633 10.5186 21.2652 11.3272 21.9758 12.3535C21.7454 12.4439 21.5424 12.629 21.4525 12.8643C21.2728 13.3374 21.0855 13.8237 20.889 14.3192C20.7332 14.7123 20.8585 15.278 21.1634 15.5639C21.5467 15.9254 21.9164 16.2799 22.2687 16.6245C22.4772 16.8265 22.792 16.8951 23.0604 16.8293C22.9286 17.8545 22.554 18.8041 21.997 19.6182C21.8331 19.3639 21.5271 19.1864 21.2151 19.2V19.1984Z" fill="#434242"/>

                            </svg>                                                                                              

                        </div>

                        <p class="mb-0"><a href="{{ url('/gol-average')}}" class="enlace-unstyle color-black fs-01">Calcular Gol Average</a></p>  

                    </div>                    

                </li>

            </ul>

        </div>

        <div class="center-bar-flotante-bottom remove-desktop">

            <ul class="list-unstyled ps-5 border-bottom-complet py-2">

                <li class="mb-1 ps-2">

                    <div class="d-flex align-items-center"></div>                    

                    <p class="mb-0"><a href="{{ url('/noticias')}}" class="enlace-unstyle color-black fs-01">Noticias</a></p>  

                </li>

                <li class="ps-2">

                    <div class="d-flex align-items-center"></div>

                    <p class="mb-0"><a href="{{ url('/contacto')}}" class="enlace-unstyle color-black fs-01">Contacto</a></p>  

                </li>

            </ul>

        </div>
        
    </div>

</nav>