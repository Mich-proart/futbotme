<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminLigasController;
use App\Http\Controllers\Admin\AdminTorneosController;
use App\Http\Controllers\Admin\AdminClubesController;
use App\Http\Controllers\Admin\AdminEquiposController;
use App\Http\Controllers\Admin\AdminJugadoresController;
use App\Http\Controllers\Admin\AdminAgendaController;

// Rutas para el panel admin 

// rutas directos
Route::get('admin-panel/', [AdminController::class, 'index']);

Route::get('admin-panel/ligas/', [AdminLigasController::class, 'indexLigas']);

Route::get('admin-panel/torneos/', [AdminTorneosController::class, 'indexTorneos']);

Route::get('admin-panel/federaciones/', [AdminController::class, 'indexFederaciones']);

// clubes
Route::get('admin-panel/clubes/', [AdminClubesController::class, 'indexPaises']);
Route::get('admin-panel/clubes/{id}', [AdminClubesController::class, 'editarClub']);

// equipos
Route::get('admin-panel/equipo/{id}', [AdminEquiposController::class, 'editarEquipo']);

// jugadores
Route::get('admin-panel/jugadores/', [AdminJugadoresController::class, 'indexJugadores']);
Route::get('admin-panel/jugadores/editar-jugador/{id}', [AdminJugadoresController::class, 'editarJugador']);

Route::get('admin-panel/admin-disenho-menu/', [AdminController::class, 'indexCrearMenu']);

// Peticiones POST y GET Agenda/Calendario
Route::get('admin-panel/agenda/{mes}/{anho}', [AdminAgendaController::class, 'indexAgenda']);
Route::get('admin-panel/agenda/listado-agenda/{categoria}/{fecha}', [AdminAgendaController::class, 'listadoAgenda']);

// Peticiones post partidos
Route::post('admin-panel/editar-partido/', [AdminController::class, 'editarPartido'])->name('editarPartido');
Route::post('admin-panel/update-partido-automatic/', [AdminController::class, 'updateAutomaticPartido'])->name('updateAutomaticPartido');

// Peticiones post ligas y torneos
Route::post('admin-panel/competicion-ligas/', [AdminLigasController::class, 'indexCompeticionesLigas'])->name('indexCompeticionesLigas');
Route::post('admin-panel/competicion-torneos/', [AdminTorneosController::class, 'indexCompeticionesTorneos'])->name('indexCompeticionesTorneos');

// Peticiones post clubs
Route::get('admin-panel/pais-club/{id}', [AdminClubesController::class, 'getClubes'])->name('getClubes');

// Peticiones post jugadores
Route::post('admin-panel/jugadores-ajax/', [AdminJugadoresController::class, 'getJugadoresAjax'])->name('getJugadoresAjax');
