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
Route::get('index/setting','Index\ComplaintController@index');
Route::get('index/offer','Index\OfferController@index');
Route::get('index/product','Index\OfferController@lists');