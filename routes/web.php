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
Route::get('index/index','Index\Index@index');
//客户服务记录
Route::get("/redcord/create","Index\RedcordController@create");
Route::post("/redcord/store","Index\RedcordController@store");