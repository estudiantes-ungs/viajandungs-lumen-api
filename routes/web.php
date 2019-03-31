<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
    
//return \App\Viaje::all();

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('viajes',  ['uses' => 'ViajeController@showAllViajes']);
  
    $router->get('viajes/{id}', ['uses' => 'ViajeController@showOneViaje']);
  
    $router->post('viajes', ['uses' => 'ViajeController@create']);
  
    $router->delete('viajes/{id}', ['uses' => 'ViajeController@delete']);
  
    $router->put('viajes/{id}', ['uses' => 'ViajeController@update']);
});

$router->get('/generate_key', function () use ($router) {
    return str_random(32);
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
