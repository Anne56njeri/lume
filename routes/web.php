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
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', [], function ($api) {

    $api->get('/users', 'App\Http\Controllers\Api\UserController@getUsers');
    $api->get('/users/{id}', 'App\Http\Controllers\Api\UserController@showOneUser');
    $api->post('/users', 'App\Http\Controllers\Api\UserController@create');
    $api->delete('/users/{id}', 'App\Http\Controllers\Api\UserController@delete');
    $api->put('/users/{id}', 'App\Http\Controllers\Api\UserController@update');

    $api->get('/accounts', 'App\Http\Controllers\Api\AccountController@getAccounts');
    $api->get('/accounts/{id}', 'App\Http\Controllers\Api\AccountController@showOneAccount');
    $api->post('/accounts', 'App\Http\Controllers\Api\AccountController@create');
    $api->delete('/accounts/{id}', 'App\Http\Controllers\Api\AccountController@delete');
    $api->put('accounts/{id}', 'App\Http\Controllers\Api\AccountController@update');

});
