<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\BuscadorController;
use App\Http\Controllers\FichaJugadorController;
use App\Http\Controllers\FichaEquipoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

Route::get('/', [Controller::class, 'index'])->name('home');

//Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/noticias', [CustomController::class, 'indexNoticias'])->name('noticias');

Route::get('/contacto', [CustomController::class, 'indexContacto'])->name('contacto');

Route::get('/preguntas-frecuentes', [CustomController::class, 'indexPreguntas'])->name('preguntas-frecuentes');

Route::get('/publicidad', [CustomController::class, 'indexPublicidad'])->name('publicidad');

Route::get('/partidos', [CustomController::class, 'indexPartidos'])->name('partidos');

Route::get('/gol-average', [CustomController::class, 'indexGolAverage'])->name('gol-average');

Route::get('/politica-cookies', [CustomController::class, 'indexPoliticaCookies'])->name('politica-cookies');

Route::get('/condiciones-uso', [CustomController::class, 'indexCondicionesUso'])->name('condiciones-uso');

Route::get('/partidos-televisados', [CustomController::class, 'indexPartidosTelevisados'])->name('partidos-televisados');

Route::get('/resultados-directo/torneo/{nombre?}/{id?}', [Controller::class, 'indexCategorias'])->name('categories');

Route::get('/resultados-directo/torneo/{nombre?}/{id?}/{tabs?}', [Controller::class, 'indexCategorias'])->name('categories');

/* ESTE ES PARA ACTUALIZAR LAS JORNADAS POR EL INPUT */

Route::post('/actualizar-jornada', [Controller::class, 'actualizarJornada'])->name('actualizar-jornada');


Route::get('/ascensos-y-descensos/{nacional}', [Controller::class, 'indexCategoriasAscenso'])->name('categories-ascenso-descenso');

// equipos
Route::get('/resultados-directo/equipo/{club?}/{id?}/datos', [FichaEquipoController::class, 'indexEquipos'])->name('equipos');

// jugador 
Route::get('/resultados-directo/jugador/{nombre?}/{id?}', [FichaJugadorController::class, 'indexJugador'])->name('jugadores');

// peticiones api
//Route::get('/api/bestApi', [ApiController::class, 'obtenerDatosBestApiPartidosDirecto'])->name('apiBestApi');

/******* *******/
// buscador
Route::post('/buscador', [BuscadorController::class, 'buscador'])->name('buscador');


Route::post('/leer-fichero', [AjaxController::class, 'leerFichero'])->name('leer-fichero');
Route::post('/leer-fichero-manual', [AjaxController::class, 'leerFicherManuales'])->name('leer-fichero-manual');

//Route::get('/ajax-example', 'AjaxController@index')->name('ajax.example');
//Route::post('/ajax-example', 'AjaxController@getData')->name('ajax.get_data');
/* login */

Auth::routes();

