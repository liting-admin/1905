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
<<<<<<< HEAD

Route::get('index/reg','Index\AdminController@reg');

Route::prefix('/admin')->group(function(){
Route::post('doReg','Index\AdminController@doReg');
Route::get('login','Index\AdminController@login')->name('login');
Route::post('doLogin','Index\AdminController@doLogin');
});

Route::prefix('/client')->middleware('auth')->group(function(){
    Route::get('create','Index\ClientController@create');
    Route::get('index','Index\ClientController@index');
    Route::post('store','Index\ClientController@store');
    Route::get('edit/{id}','Index\ClientController@edit');
    Route::post('update/{id}','Index\ClientController@update');
    Route::get('delete/{id}','Index\ClientController@destroy');
});

// Auth::routes();

// Route::get('/home','HomeController@index')->name('home');
=======
<<<<<<< HEAD
Route::get('index/setting','Index\ComplaintController@index');
Route::get('index/offer','Index\OfferController@index');
Route::get('index/product','Index\OfferController@lists');
=======
//客户服务记录
Route::get("/redcord/create","Index\RedcordController@create");
Route::post("/redcord/store","Index\RedcordController@store");
>>>>>>> 565271137b0dcc971d0e64d48d3c073dd1a74088
>>>>>>> dc16844f2f2bfc83ba2ab544f91f9aba521dfab2
