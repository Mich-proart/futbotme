<?php $datos = file_get_contents(base_path()."/resources/assets/menu.json");?>

<?php $iObj = json_decode($datos, true);?>

<?php foreach ($iObj as $key => $value) {  

    $indice = $key;

    echo $indice."<br>";

    if (count($iObj[$indice]) > 0){

        foreach ($iObj[$indice] as $element) {

            if(isset($element[0])){

                echo $element[0]['nombre'] ." - ". $element[0]['id'] ." - ". $element[0]['nombrePais'] . "<br>"; 

            }else{
                
                echo $element['nombre'] ." - ". $element['id'] ." - ". $element['nombrePais'] . "<br>";   
            } 
        }
    }
}