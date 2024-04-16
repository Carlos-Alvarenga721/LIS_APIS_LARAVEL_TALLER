<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API para mostrar los datos en pantalla
Route::get('/articulos', 'App\Http\Controllers\ArticuloController@index'); 

//API para crear un registro 
Route::post('/articulos', 'App\Http\Controllers\ArticuloController@store');

//API para actualizar un dato 
Route::put('/articulos/{id}', 'App\Http\Controllers\ArticuloController@update');

//API para eliminar los datos o registro
Route::delete('/articulos/{id}', 'App\Http\Controllers\ArticuloController@destroy');

