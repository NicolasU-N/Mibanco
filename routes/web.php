<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::Resource('/Cliente', 'ClienteController');

Route::Resource('/TipoCredito', 'TipoCreditoController');

Route::Resource('/Credito', 'CreditoController'); 

Route::Resource('/Movimiento', 'MovimientoController'); 

Route::get('/GenerarMovimiento/{id}', 'MovimientoController@crear');

