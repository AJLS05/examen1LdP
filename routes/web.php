<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directorioController;
use App\Http\Controllers\contactoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});

Route::get('/directorio', [directorioController::class, 'index'])->name('directorio.inicio');
Route::get('/directorio/crear', [directorioController::class, 'create'])->name('directorio.crear');
Route::post('/directorio/guardar', [directorioController::class, 'store'])->name('directorio.store');
Route::get('/directorio/buscar', [directorioController::class, 'search'])->name('directorio.buscar');
Route::get('/directorio/ver/{id}', [directorioController::class, 'watch'])->name('directorio.ver');
Route::get('/directorio/eliminar/{id}', [directorioController::class, 'delete'])->name('directorio.eliminar');

