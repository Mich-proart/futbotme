<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

// Rutas para el panel admin 
Route::get('admin-panel', [AdminController::class, 'index']);

Route::get('admin-panel/test', [AdminController::class, 'test']);