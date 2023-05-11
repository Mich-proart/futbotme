const partidosDirecto = (respuesta) =>{

    var fechaActual = new Date();
    var hora = fechaActual.getHours();
    var minutos = fechaActual.getMinutes();
    var segundos = fechaActual.getSeconds();

    console.log(respuesta)

    jQuery('.update-un-minuto').text(hora + ":" + minutos)
}


/*
*
*funcion generica para realizar las peticiones de api
*
*/
const hacerPeticion = (tipoPeticion) =>{

    let xmlhttp, urlPeticion;

    // validamos el tipo de peticion para ejecutar una u otra funcion para devolver distintas respuestas con una misma funcion ajax
    switch (tipoPeticion) {

        case 'partidosDirecto':

            urlPeticion = `${urlBase}api/bestApi`
            
        break;
    }

    // Verda código para navegadores modernos
    // False código para navegadores antiguos (IE6, IE5)
    window.XMLHttpRequest ? xmlhttp = new XMLHttpRequest() : xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
    
    // Función de callback para manejar la respuesta de la API
    xmlhttp.onreadystatechange = function() {

        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            // La respuesta se ha recibido correctamente
            let respuesta = xmlhttp.responseText;

            respuesta = JSON.parse(respuesta)

            // validamos el tipo de peticion para ejecutar una u otra funcion para devolver distintas respuestas con una misma funcion ajax
            switch (tipoPeticion) {

                case 'partidosDirecto':

                    partidosDirecto(respuesta)
            
                break;
            }          
        }
    };    
    
    // Realizar la petición a la API (en este caso, se utiliza la API de ejemplo 'https://ejemplo.com/api')
    xmlhttp.open("GET", urlPeticion, true);

    xmlhttp.send();
}

$(document).ready(function () {

    hacerPeticion('partidosDirecto')

    setInterval(() => {

        hacerPeticion('partidosDirecto')
        
    }, 60000);
})