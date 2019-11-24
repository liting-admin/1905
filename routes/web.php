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
Route::get('index/sel','Index\Sel@index');
Route::get('index/sell','Index\Sell@index');
Route::get('index/sel','Index\Sel@indexs');