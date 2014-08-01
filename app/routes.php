<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home' , 'uses' => 'PagesController@homePage']);

Route::get('register', ['as' => 'users.create', 'uses' => 'UsersController@create']);
Route::post('register', ['as' => 'users.store', 'uses' => 'UsersController@store']);
