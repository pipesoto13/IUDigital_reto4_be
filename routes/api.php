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

Route::get('/subjects', 'App\Http\Controllers\SubjectController@index');
Route::get('/subjects/{id}', 'App\Http\Controllers\SubjectController@show');
Route::post('/subjects', 'App\Http\Controllers\SubjectController@store');
Route::put('/subjects/{id}', 'App\Http\Controllers\SubjectController@update');
Route::delete('/subjects/{id}', 'App\Http\Controllers\SubjectController@destroy');

Route::post('/register', 'App\Http\Controllers\ClientController@store');
Route::get('/login', 'App\Http\Controllers\ClientController@index');
