<?php $datos = file_get_contents(base_path()."/resources/views/components/menu.json");?>

<?php $iObj = json_decode($datos, true);?>

<ul class="listado-padres-content">

    <?php foreach ($iObj as $key => $value) { ?>     

        <?php $indice = $key;?>
        
        <li class="item-parent"><?php echo $indice;?>

            <?php if (count($iObj[$indice]) > 0){ ?>

                <ul class="listado-childrens-content">

                    <?php foreach ($iObj[$indice] as $element) { ?>

                        <?php if(isset($element[0])){ ?>

                            <li class="item-children"><?php echo $element[0]['nombre'];?></li>

                            {{-- echo $element[0]['nombre'] ." - ". $element[0]['id'] ." - ". $element[0]['nombrePais'] . "<br>";  --}}

                        <?php }else{ ?>

                            <li class="item-children"><?php echo $element['nombre'];?></li>
                            
                            {{-- echo $element['nombre'] ." - ". $element['id'] ." - ". $element['nombrePais'] . "<br>";    --}}

                        <?php } ?>

                    <?php }?>

                </ul>

            <?php }?>

        </li>

    <?php }?>

    <li>
        
        <a href="{{ route('home') }}">Home</a>
    
    </li>

    <li>
        
        <a href="{{ route('contacto') }}">Contacto</a>
    
    </li>     

</ul>