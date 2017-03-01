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
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/cats', 'CatController@index');

Route::get('/config', 'ConfigController@index');

Route::post('/cats', ['as' => 'cats.create', 'use' => 'CatController@store']);
