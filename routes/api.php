<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['auth:api']], function () {
    # doc https://laravel.com/docs/5.4/controllers#resource-controllers
    Route::resource('cats', '\App\Http\Controllers\Api\CatController', array('only' => array('index', 'show')));
});
