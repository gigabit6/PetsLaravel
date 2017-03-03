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
})->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/contact-us', 'HomeController@contactUsSend');
Route::get('/contact-us', 'HomeController@contactUs');

Route::get('users/list', 'UserController@index')->name('user.list');
Route::get('users/details', 'UserController@details')->name('user.details');
Route::get('users/add', 'UserController@add')->name('users.add');
Route::post('users/add', 'UserController@store');
Route::get('users/edit/{id}', 'UserController@edit')->name('users.edit');
Route::post('users/update/{id}', 'UserController@update');
Route::delete('users/delete/{id}', 'UserController@delete')->name('users.delete');

Route::get('pets/list', 'PetsController@index')->name('pets.list');
Route::get('pets/details', 'PetsController@details')->name('pets.details');
Route::get('pets/add', 'PetsController@add')->name('pets.add');
Route::post('pets/add', 'PetsController@store');
Route::get('pets/edit/{id}', 'PetsController@edit')->name('pets.edit');
Route::post('pets/update/{id}', 'PetsController@update');
Route::delete('pets/list/{id}', 'PetsController@delete')->name('pets.delete');
Route::get('pets/list/mypets', 'PetsController@indexMyPets')->name('mypets.list');
Route::post('pets/list/{id}', 'PetsController@buy')->name('pets.buy');