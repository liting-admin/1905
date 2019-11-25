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
Route::any('index/index','Index\Index@index');
Route::any('index/create','Index\CreateController@create');
Route::any('index/store','Index\CreateController@store');
Route::any('index/list','Index\CreateController@list');