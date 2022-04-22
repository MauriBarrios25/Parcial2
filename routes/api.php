<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('lenguajes' , 'App\Http\Controllers\LenguajeController@index');

Route::get('lenguajes/{id}' , 'App\Http\Controllers\LenguajeController@show');

Route::post('lenguajes' , 'App\Http\Controllers\LenguajeController@store');

Route::put('lenguajes' , 'App\Http\Controllers\LenguajeController@store');

Route::delete('lenguajes/{id}' , 'App\Http\Controllers\LenguajeController@destroy');


Route::get('terminos' , 'App\Http\Controllers\TerminosController@index');

Route::get('terminos/{id}' , 'App\Http\Controllers\TerminosController@show');

Route::post('terminos' , 'App\Http\Controllers\TerminosController@store');

Route::put('terminos' , 'App\Http\Controllers\TerminosController@store');

Route::delete('terminos/{id}' , 'App\Http\Controllers\TerminosController@destroy');
