<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Controlador para el panel de admin
class AdminController extends Controller
{
    // esta funcion solo envia la vista de la home 
    public function  index(){
        return view('admin.index');
    }

    // funcion solo para tener todo el tema de la vista
    public function  test(){
        return view('admin.test');
    }
}
