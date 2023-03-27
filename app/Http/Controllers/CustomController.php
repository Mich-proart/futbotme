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
}
