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
    return view('welcome');
});

Route::get('/stringa', function () {
    return 'ritorno di stringa';
});

Route::get('/intero', function () {
    return '123456';
});

Route::get('/Array', function () {
    return $Array = ['Ciao', 'Ciao', 'Ciao', 'Ciao'];
});

Route::get('/chisiamo', function () {
    return 'chisiamo';
});

Route::get('/contatti', function () {
    return 'contatti';
});

Route::get('/storia', function () {
    return 'storia';
});