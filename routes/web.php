<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directorio;
use App\Http\Controllers\contacto;

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

Route::get('/directorio', function () {
    return view('directorio');
});

Route::get('/directorio/crear', [directorio::class, 'create'])->name('directorio.crear');

Route::get('/directorio/buscar', [DirectorioController::class, 'search'])->name('directorio.buscar');

Route::get('/eliminar', function () {
    return view('directorio');
});

Route::get('/agregarcontacto', function () {
    return view('contacto');
});

Route::get('/vercontactos', function () {
    return view('contacto');
});

