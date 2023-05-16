<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\BuscadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index'])->name('home');

Route::get('/noticias', [CustomController::class, 'indexNoticias'])->name('noticias');

Route::get('/contacto', [CustomController::class, 'indexContacto'])->name('contacto');

Route::get('/preguntas-frecuentes', [CustomController::class, 'indexPreguntas'])->name('preguntas-frecuentes');

Route::get('/publicidad', [CustomController::class, 'indexPublicidad'])->name('publicidad');

Route::get('/partidos', [CustomController::class, 'indexPartidos'])->name('partidos');

Route::get('/gol-average', [CustomController::class, 'indexGolAverage'])->name('gol-average');

Route::get('/politica-cookies', [CustomController::class, 'indexPoliticaCookies'])->name('politica-cookies');

Route::get('/condiciones-uso', [CustomController::class, 'indexCondicionesUso'])->name('condiciones-uso');

Route::get('/resultados-directo/torneo/{nombre?}/{id?}', [Controller::class, 'indexCategorias'])->name('categories');

Route::get('/ascensos-y-descensos/{nacional}', [Controller::class, 'indexCategoriasAscenso'])->name('categories');

// peticiones api
Route::get('/api/bestApi', [ApiController::class, 'obtenerDatosBestApiPartidosDirecto'])->name('apiBestApi');

// buscador
Route::post('/buscador', [BuscadorController::class, 'buscador'])->name('buscador');