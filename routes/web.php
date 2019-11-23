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
