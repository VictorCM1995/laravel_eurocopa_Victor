<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\PartidoController;

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
Route::get('/',[GrupoController::class,"inicio"])->name("home");
Route::get('grupos',[GrupoController::class,"index"])->name("grupos.index");
Route::get('paises/{pais}',[PaisController::class,"index"])->name("paises.show");
Route::post('partido/{partido}/disputar',[PartidoController::class,"update"]);
Route::get('api/partido/{partido}/resetear');
Route::get('api/jugadores/{pais}/{posicion}');
