// hacemos los cambios en partidos directos cambios solo de valores para no afectar el html solo los datos
const partidosDirecto = (respuesta) =>{

    let fechaActual = new Date();
    let hora = fechaActual.getHours();
    let minutos = fechaActual.getMinutes();    

    jQuery('.update-un-minuto').text(hora + ":" + minutos)
}

/*
*
* funcion generica para realizar las peticiones de api
* para reutilizar la funcion la dividimos con switch 
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

/*** inicio de ejecuciones ****/
$(document).ready(function () {

    /* 
    *
    * ejecutamos la peticion y luego cada 1 minuto 
    * 
    */

    hacerPeticion('partidosDirecto')

    setInterval(() => {

        hacerPeticion('partidosDirecto')
        
    }, 60000);

    /* 
    *
    * ejecutamos la peticion y luego cada 1 minuto 
    * 
    */
})