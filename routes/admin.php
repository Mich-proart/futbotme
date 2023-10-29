<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminLigasController;
use App\Http\Controllers\Admin\AdminTorneosController;
use App\Http\Controllers\Admin\AdminClubesController;
use App\Http\Controllers\Admin\AdminJugadoresController;

// Rutas para el panel admin 
Route::get('admin-panel/', [AdminController::class, 'index']);

Route::get('admin-panel/ligas/', [AdminLigasController::class, 'indexLigas']);

Route::get('admin-panel/torneos/', [AdminTorneosController::class, 'indexTorneos']);

Route::get('admin-panel/agenda/', [AdminController::class, 'indexAgenda']);

Route::get('admin-panel/federaciones/', [AdminController::class, 'indexFederaciones']);

Route::get('admin-panel/clubes/', [AdminClubesController::class, 'indexPaises']);

Route::get('admin-panel/jugadores/', [AdminJugadoresController::class, 'indexJugadores']);

Route::get('admin-panel/admin-disenho-menu/', [AdminController::class, 'indexCrearMenu']);

// Peticiones post ligas y torneos
Route::post('admin-panel/competicion-ligas/', [AdminLigasController::class, 'indexCompeticionesLigas'])->name('indexCompeticionesLigas');
Route::post('admin-panel/competicion-torneos/', [AdminTorneosController::class, 'indexCompeticionesTorneos'])->name('indexCompeticionesTorneos');

// Peticiones post clubs
Route::post('admin-panel/pais-club/', [AdminClubesController::class, 'getClubes'])->name('getClubes');