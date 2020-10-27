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

Route::get('/users/create', 'UserController@create')->name('manage.users.create');
Route::post('/users', 'UserController@store')->name('manage.users.store');
Route::get('/users/{id}', 'UserController@show')->name('manage.users.show');
Route::get('/users/{id}/edit', 'UserController@edit')->name('manage.users.edit');
Route::put('/users/{id}', 'UserController@update')->name('manage.users.update');

Route::get('/categories/create', 'CategoryController@create')->name('manage.categories.create');
Route::post('/categories', 'CategoryController@store')->name('manage.categories.store');
Route::get('/categories/{id}', 'CategoryController@show')->name('manage.categories.show');
Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('manage.categories.edit');
Route::put('/categories/{id}', 'CategoryController@update')->name('manage.categories.update');

Route::get('/sectors', 'SectorController@index')->name('manage.sectors.index');


