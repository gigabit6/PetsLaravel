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

Route::get('/home', 'HomeController@index');

Route::get('users/list', 'UserController@index')->name('user.list');
Route::get('users/add', 'UserController@add')->name('users.add');
Route::post('users/store', 'UserController@store');
Route::get('users/edit/{id}', 'UserController@edit')->name('users.edit');
Route::post('users/update/{id}', 'UserController@update');
Route::post('users/delete/{id}', 'UserController@delete')->name('users.delete');

Route::get('pets/list', 'PetsController@index')->name('pets.list');
Route::get('pets/details', 'PetsController@details')->name('pets.details');
Route::get('pets/add', 'PetsController@add')->name('pets.add');
Route::post('pets/add', 'PetsController@store');
Route::get('pets/edit/{id}', 'PetsController@edit')->name('pets.edit');
Route::post('pets/update/{id}', 'PetsController@update');
Route::post('pets/delete/{id}', 'PetsController@delete')->name('pets.delete');