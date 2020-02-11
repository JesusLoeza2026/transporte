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
    return view('index');
});

Route::get('inicio', function () {
    return view ('inicio');
});

Route::get('seccion', function () {
    return view ('seccion');
    
});
// ZONA CHOFER
Route::view('detalleschofer','chofer.detalles');
Route::view('admichoferrr','chofer.administrar');

// AQUI TERMINA WEE
// ZONA DE TRANSPORTE
Route::view('detalles','transporte.detalles');
Route::apiResource('apiUsu','UsuController');
Route::apiResource('apiAuto','AutoController');
// FIN ZONA TRANSPORTE
Route::get('error', function () {
    return view ('error');
    
});

Route::get('m', function () {
    return view ('layouts.master');
    
});

// zona de cuenta
Route::view('contraseñaadmin', 'cuenta.contraseña');
Route::get('apicontra','ContraController@cambio');
Route::view('cambio','cuenta.cambio');
// fin de zona de cuenta

// ZONA DE APIS
Route::apiResource('apiUsuario','TrasporteoController');
Route::apiResource('apiLogin','AdministradorController');
Route::apiResource('apiChofer','ChoferController');
Route::apiResource('apiTurno','TurnoController');
// route de login
Route::get('logi', function () {
    return view ('login');
});
Route::post('logi','AdministradorController@validar');
Route::get('salir','AdministradorController@salir');