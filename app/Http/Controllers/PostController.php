<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $ejemplos = [
            ['title' => 'ejemplo 1'],
            ['title' => 'ejemplo 2'],
            ['title' => 'ejemplo 3'],
            ['title' => 'ejemplo 4'],
        ];

        return view('welcome', ['ejemplos' => $ejemplos]);        
    }
}
