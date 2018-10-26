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

$api->version('v1', ['middleware' => 'api.auth'], function ($api) {

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

    $api->get('/contacts', 'App\Http\Controllers\Api\ContactController@getContact');
    $api->get('/contacts/{id}', 'App\Http\Controllers\Api\ContactController@showOneContact');
    $api->post('/contacts', 'App\Http\Controllers\Api\ContactController@create');
    $api->delete('/contacts/{id}', 'App\Http\Controllers\Api\ContactController@delete');
    $api->put('contacts/{id}', 'App\Http\Controllers\Api\ContactController@update');

    $api->get('/opportunity', 'App\Http\Controllers\Api\OpportunityController@getOpportunity');
    $api->get('/opportunity/{id}', 'App\Http\Controllers\Api\OpportunityController@showOneOpportunity');
    $api->post('/opportunity', 'App\Http\Controllers\Api\OpportunityController@create');
    $api->delete('/opportunity/{id}', 'App\Http\Controllers\Api\OpportunityController@delete');
    $api->put('opportunity/{id}', 'App\Http\Controllers\Api\OpportunityController@update');

    $api->get('/meetings', 'App\Http\Controllers\Api\MeetingsController@getMeeting');
    $api->get('/meetings/{id}', 'App\Http\Controllers\Api\MeetingsController@showOneMeeting');
    $api->post('/meetings', 'App\Http\Controllers\Api\MeetingsController@create');
    $api->delete('/meetings/{id}', 'App\Http\Controllers\Api\MeetingsController@delete');
    $api->put('meetings/{id}', 'App\Http\Controllers\Api\MeetingsController@update');

    $api->get('/messages', 'App\Http\Controllers\Api\MessagesController@getMessage');
    $api->get('/messages/{id}', 'App\Http\Controllers\Api\MessagesController@showOneMessage');
    $api->post('/message', 'App\Http\Controllers\Api\MessagesController@create');
    $api->delete('/messages/{id}', 'App\Http\Controllers\Api\MessagesController@delete');
    $api->put('messages/{id}', 'App\Http\Controllers\Api\MessagesController@update');
    $api->post('/messages', 'App\Http\Controllers\Api\MessagesController@create');

    $api->post('/auth/login', 'App\Http\Controllers\AuthController@postLogin');



});
