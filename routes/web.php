<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\CDController;
use App\Http\Controllers\GravadoraController;
use App\Http\Controllers\DistribuidoraController;
use App\Http\Controllers\TrilhaController;
use App\Http\Controllers\GeneroMusicalController;
use App\Http\Controllers\BoxCDController;
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

Route::resource('artista', ArtistaController::class);
Route::resource('cd', CDController::class);
Route::resource('gravadora', GravadoraController::class);
Route::resource('distribuidora', DistribuidoraController::class);
Route::resource('trilha', TrilhaController::class);
Route::resource('genero-musical', GeneroMusicalController::class);
Route::resource('box-cd', BoxCDController::class);