<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomModel;

class CustomController extends Controller{
    
    public function indexContacto(){        

        return view('contact');
    }

    public function indexNoticias(){        
 
        return view('notices');
    }

    public function indexPreguntas(){

        return view('preguntas-frecuentes');
    }

    public function indexPublicidad(){

        return view('publicidad');
    }

    /* public function indexPartidos(){
        ESTABA MAL LA RUTA, ERA LA SIGUIENTE QUE ES PARTIDOS TELEVISADOS
        return view('partidos');
    } */

    public function indexPartidosTelevisados(){
        return view('televisados');
    }

    public function indexGolAverage(){

        return view('gol-average');
    }

    public function indexPoliticaCookies(){

        return view('politica-cookies');
    }

    public function indexCondicionesUso(){

        return view('condiciones-uso');
    }
    

}
