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
    Route::get('/special/{workshop}', 'WorkshopController@special');

});


Route::group([
    'prefix' => 'media-items',
    'middleware' => 'auth:web'
], function () {
    Route::post('/create', 'MediaItemController@create');
    Route::post('/update/{mediaItem}', 'MediaItemController@update');
    Route::get('/', 'MediaItemController@index');
    Route::get('/delete/{mediaItem}', 'MediaItemController@destroy');
    Route::get('/edit/{mediaItem}', 'MediaItemController@edit');
    Route::get('/add', 'MediaItemController@add');
    Route::get('/pics/{id}', 'MediaItemController@show_pictures');
    Route::get('/special/{mediaItem}', 'MediaItemController@special');

});

Route::group([
    'prefix' => 'movies',
    'middleware' => 'auth:web'
], function () {
    Route::post('/create', 'MovieController@create');
    Route::post('/update/{movie}', 'MovieController@update');
    Route::get('/', 'MovieController@index');
    Route::get('/delete/{movie}', 'MovieController@destroy');
    Route::get('/edit/{movie}', 'MovieController@edit');
    Route::get('/add', 'MovieController@add');
    Route::get('/pics/{id}', 'MovieController@show_pictures');
    Route::get('/special/{movie}', 'MovieController@special');

});