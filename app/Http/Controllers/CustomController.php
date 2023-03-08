<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomModel;

class CustomController extends Controller{
    
    public function test(){        

        $array = ['esto es solo dato'];
 
        return $array;
    }
}
