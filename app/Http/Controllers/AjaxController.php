<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Partido;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /* public function index()
    {
        return view('ajax-example');
    }
    public function getData(Request $request)
    {
        // Lógica para obtener datos (por ejemplo, todos los posts)
        $posts = Partido::all();

        // Devolver los datos como respuesta JSON
        return response()->json(['posts' => $posts]);
    } */

    

    public function leerFichero22(Request $request){

        $rutaArchivo = base_path('directos.json');
        // Verificar si el archivo existe
        if (file_exists($rutaArchivo)) {
            // Leer el contenido del archivo JSON
            $contenidoJSON = file_get_contents($rutaArchivo);

            // Decodificar el contenido JSON a un array asociativo
            $datos = json_decode($contenidoJSON, true);

            // Hacer algo con los datos
            // Por ejemplo, devolverlos como respuesta
            //return response()->json($datos);
            $datosPartidos = $datos;
            return view('partials.actualizarPartidos', compact('datosPartidos'));
        } else {
            // El archivo no existe
            return response()->json(['error' => 'El archivo no existe', 'ruta' => $rutaArchivo], 404);
        }
    }

    /* public function leerFichero(Request $request){

        $rutaArchivo = base_path('directos-futbolme.json');

        // Verificar si el archivo existe
        if (file_exists($rutaArchivo)) {
            // Leer el contenido del archivo JSON
            $contenidoJSON = file_get_contents($rutaArchivo);

            // Decodificar el contenido JSON a un array asociativo
            $datos = json_decode($contenidoJSON, true);

            // Hacer algo con los datos
            // Por ejemplo, devolverlos como respuesta
            //return response()->json($datos);
            $datosPartidos = $datos;
            return view('partials.actualizarPartidos', compact('datosPartidos'));
        } else {
            // El archivo no existe
            return response()->json(['error' => 'El archivo no existe', 'ruta' => $rutaArchivo], 404);
        }
    } */

}
