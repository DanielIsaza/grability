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
Route::get('/', ['uses' => 'cubeController@view', 'as' => 'view']);
Route::post('/execute', ['uses' => 'cubeController@execute', 'as' => 'execute']);
Route::post('/test', ['uses' => 'cubeController@test', 'as' => 'test']);