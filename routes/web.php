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
Route::get('/principal', function () {
    return view('vistas.inicio');
});
Route::get('/otro', function () {
    return view('vistas.otro');
});
Route::get('/tuser', function () {
    return view('vistas.tiposdeusuarios');
});
Route::resource('user', 'TusersController');

//envio de mensajes
Route::get('/mensajes', function () {
    return view('vistas.mensajes');
});

Route::get('/mail', 'mail@index');

Route::post('/mensajes', 'SMSController@sendSMS');

Route::resource('/pagos', 'Pagos');


