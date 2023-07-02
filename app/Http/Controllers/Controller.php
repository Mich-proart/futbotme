<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController{
    
    public function index(){        

        $users = [
            'hola' => 'mundo'
        ];
 
        return view('welcome', ['users' => $users]);
    }

    public function indexCategorias($nombre){

        return view('categories',['nombre' => $nombre]);
    }

    public function indexCategoriasAscenso($nacional){

        return view('categories',['nombre' => $nacional]);
    }
}
