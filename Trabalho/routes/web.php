<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('produto.welcome');
});

Route::get('/quemsomos', function () {
    return view('produto.quemsomos');
});

Route::get('/reserva', function () {
    return view('produto.reserva');
});

Route::get('/contato', function () {
    return view('produto.contato');
});