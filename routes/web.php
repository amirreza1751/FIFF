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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group([
    'prefix' => 'workshops',
    'middleware' => 'auth:web'
], function () {
    Route::post('/create', 'WorkshopController@create');
    Route::post('/update/{workshop}', 'WorkshopController@update');
    Route::get('/', 'WorkshopController@index');
    Route::get('/delete/{workshop}', 'WorkshopController@destroy');
    Route::get('/edit/{workshop}', 'WorkshopController@edit');
    Route::get('/add', 'WorkshopController@add');
    Route::get('/pics/{id}', 'WorkshopController@show_pictures');

});