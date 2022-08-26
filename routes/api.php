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

// route pour la liste des pairs
Route::get('/pair', ['App\Http\Controllers\ApiControler', 'listApi']);
Route::post('/pair', ['App\Http\Controllers\ApiControler', 'createApi']);
Route::delete('/pair/{id}', ['App\Http\Controllers\ApiControler', 'deleteApi']);

// route pour les devise
Route::get('/currency', ['App\Http\Controllers\ApiControler', 'currencyListApi']);
Route::post('/currency', ['App\Http\Controllers\ApiControler', 'createCurrencyApi']);
Route::delete('/currency/{id}', ['App\Http\Controllers\ApiControler', 'deleteCurrencyApi']);
