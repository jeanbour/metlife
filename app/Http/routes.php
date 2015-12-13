<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layout');
});

Route::get('/captura/produccion', ['as' => 'produccion', 'uses' => 'CapturaController@capturaProduccion'] );

Route::get('/captura/servicios', ['as' => 'servicios', 'uses' => 'CapturaController@capturaServicios'] );

Route::post('/registrarProduccion', ['as' => 'registrarProduccion', 'uses' => 'CapturaController@registrarProduccion'] );

Route::post('/registrarServicios', ['as' => 'registrarServicios', 'uses' => 'CapturaController@registrarServicios'] );

