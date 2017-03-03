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

Route::get('users/list', 'UserController@index')->name('pets.list');
Route::get('users/addUser', 'UserController@addUser')->name('users.add');
Route::post('users/addUser', 'UserController@store');
Route::get('users/editUser/{id}', 'UserController@editUser')->name('users.edit');
Route::post('users/editUser/{id}', 'UserController@store');
Route::post('users/deleteUser/{id}', 'UserController@delete')->name('users.delete');

Route::get('pets/list', 'PetsController@index')->name('pets.list');
Route::get('pets/addUser', 'PetsController@addPet')->name('pets.add');
Route::post('pets/addUser', 'PetsController@store');
Route::get('pets/editUser/{id}', 'PetsController@editPet')->name('pets.edit');
Route::post('pets/editUser/{id}', 'PetsController@store');
Route::post('pets/deleteUser/{id}', 'PetsController@delete')->name('pets.delete');