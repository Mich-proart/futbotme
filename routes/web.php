<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomController;

use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index'])->name('home');

Route::get('/noticias', [CustomController::class, 'indexNoticias'])->name('noticias');

Route::get('/contacto', [CustomController::class, 'indexContacto'])->name('contacto');

Route::get('/resultados-directo/torneo/{nombre}/{id}', [Controller::class, 'indexCategorias'])->name('categories');