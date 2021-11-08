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

Route::get('/facilities', 'FacilitiesController@index')->name('facilities.index');
Route::get('/facilities/add', 'FacilitiesController@add')->name('facilities.add');
Route::get('/facilities/create', 'FacilitiesController@create')->name('facilities.create');
Route::get('/facilities/{id}', 'FacilitiesController@show')->name('facilities.show')->where(['id' => '[0-9]+']);
Route::get('/facilities/edit/{id}', 'FacilitiesController@edit')->name('facilities.edit')->where(['id' => '[0-9]+']);
Route::post('/facilities/update/{id}', 'FacilitiesController@update')->name('facilities.update')->where(['id' => '[0-9]+']);
Route::post('/facilities/delete/{id}', 'FacilitiesController@delete')->name('facilities.delete')->where(['id' => '[0-9]+']);