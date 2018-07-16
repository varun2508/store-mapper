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
    return redirect('stores');
});

Route::get('stores', 'StoreController@index');
Route::get('stores/create', 'StoreController@create');
Route::post('stores/store', 'StoreController@store');
Route::get('stores/edit/{id}', 'StoreController@edit');
Route::post('stores/update', 'StoreController@update');
Route::post('stores/delete', 'StoreController@destroy');

Route::get('map', 'MapController@index');
