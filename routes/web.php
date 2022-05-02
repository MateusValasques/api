<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\CDController;
use App\Http\Controllers\GravadoraController;
use App\Http\Controllers\DistribuidoraController;
use App\Http\Controllers\TrilhaController;
use App\Http\Controllers\GeneroMusicalController;
use App\Http\Controllers\BoxCDController;
use App\Http\Controllers\TesteMapsController;
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
    return view('teste');
});
Route::get('teste-maps', function () {
    return view('teste_api_maps');
});
Route::group(['prefix' => 'teste-maps', 'where' => ['prefix' => 'teste-maps']], function () {
    Route::get('/index', ['uses' => 'TesteMapsController@index']);
});
Route::group(['prefix' => 'artista', 'where' => ['prefix' => 'artista']], function () {
    Route::get('/index-json', ['uses' => 'ArtistaController@index_json']);
    Route::get('/index-xml', ['uses' => 'ArtistaController@index_xml']);
    Route::post('/store-json', ['uses' => 'ArtistaController@store_json']);
    Route::post('/store-xml', ['uses' => 'ArtistaController@store_xml']);
    Route::post('/update-json', ['uses' => 'ArtistaController@update_json']);
    Route::post('/update-xml', ['uses' => 'ArtistaController@update_xml']);
    Route::post('/destroy-json', ['uses' => 'ArtistaController@destroy_json']);
    Route::post('/destroy-xml', ['uses' => 'ArtistaController@destroy_xml']);
});
Route::group(['prefix' => 'cd', 'where' => ['prefix' => 'cd']], function () {
    Route::get('/index-json', ['uses' => 'CDController@index_json']);
    Route::get('/index-xml', ['uses' => 'CDController@index_xml']);
    Route::post('/store-json', ['uses' => 'CDController@store_json']);
    Route::post('/store-xml', ['uses' => 'CDController@store_xml']);
    Route::post('/update-json', ['uses' => 'CDController@update_json']);
    Route::post('/update-xml', ['uses' => 'CDController@update_xml']);
    Route::post('/destroy-json', ['uses' => 'CDController@destroy_json']);
    Route::post('/destroy-xml', ['uses' => 'CDController@destroy_xml']);
});
Route::group(['prefix' => 'gravadora', 'where' => ['prefix' => 'gravadora']], function () {
    Route::get('/index-json', ['uses' => 'GravadoraController@index_json']);
    Route::get('/index-xml', ['uses' => 'GravadoraController@index_xml']);
    Route::post('/store-json', ['uses' => 'GravadoraController@store_json']);
    Route::post('/store-xml', ['uses' => 'GravadoraController@store_xml']);
    Route::post('/update-json', ['uses' => 'GravadoraController@update_json']);
    Route::post('/update-xml', ['uses' => 'GravadoraController@update_xml']);
    Route::post('/destroy-json', ['uses' => 'GravadoraController@destroy_json']);
    Route::post('/destroy-xml', ['uses' => 'GravadoraController@destroy_xml']);
});
Route::group(['prefix' => 'distribuidora', 'where' => ['prefix' => 'distribuidora']], function () {
    Route::get('/index-json', ['uses' => 'DistribuidoraController@index_json']);
    Route::get('/index-xml', ['uses' => 'DistribuidoraController@index_xml']);
    Route::post('/store-json', ['uses' => 'DistribuidoraController@store_json']);
    Route::post('/store-xml', ['uses' => 'DistribuidoraController@store_xml']);
    Route::post('/update-json', ['uses' => 'DistribuidoraController@update_json']);
    Route::post('/update-xml', ['uses' => 'DistribuidoraController@update_xml']);
    Route::post('/destroy-json', ['uses' => 'DistribuidoraController@destroy_json']);
    Route::post('/destroy-xml', ['uses' => 'DistribuidoraController@destroy_xml']);
});
Route::group(['prefix' => 'trilha', 'where' => ['prefix' => 'trilha']], function () {
    Route::get('/index-json', ['uses' => 'TrilhaController@index_json']);
    Route::get('/index-xml', ['uses' => 'TrilhaController@index_xml']);
    Route::post('/store-json', ['uses' => 'TrilhaController@store_json']);
    Route::post('/store-xml', ['uses' => 'TrilhaController@store_xml']);
    Route::post('/update-json', ['uses' => 'TrilhaController@update_json']);
    Route::post('/update-xml', ['uses' => 'TrilhaController@update_xml']);
    Route::post('/destroy-json', ['uses' => 'TrilhaController@destroy_json']);
    Route::post('/destroy-xml', ['uses' => 'TrilhaController@destroy_xml']);
});
Route::group(['prefix' => 'genero-musical', 'where' => ['prefix' => 'genero-musical']], function () {
    Route::get('/index-json', ['uses' => 'GeneroMusicalController@index_json']);
    Route::get('/index-xml', ['uses' => 'GeneroMusicalController@index_xml']);
    Route::post('/store-json', ['uses' => 'GeneroMusicalController@store_json']);
    Route::post('/store-xml', ['uses' => 'GeneroMusicalController@store_xml']);
    Route::post('/update-json', ['uses' => 'GeneroMusicalController@update_json']);
    Route::post('/update-xml', ['uses' => 'GeneroMusicalController@update_xml']);
    Route::post('/destroy-json', ['uses' => 'GeneroMusicalController@destroy_json']);
    Route::post('/destroy-xml', ['uses' => 'GeneroMusicalController@destroy_xml']);
});
Route::group(['prefix' => 'box-cd', 'where' => ['prefix' => 'box-cd']], function () {
    Route::get('/index-json', ['uses' => 'BoxCDController@index_json']);
    Route::get('/index-xml', ['uses' => 'BoxCDController@index_xml']);
    Route::post('/store-json', ['uses' => 'BoxCDController@store_json']);
    Route::post('/store-xml', ['uses' => 'BoxCDController@store_xml']);
    Route::post('/update-json', ['uses' => 'BoxCDController@update_json']);
    Route::post('/update-xml', ['uses' => 'BoxCDController@update_xml']);
    Route::post('/destroy-json', ['uses' => 'BoxCDController@destroy_json']);
    Route::post('/destroy-xml', ['uses' => 'BoxCDController@destroy_xml']);
});
