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

Auth::routes([
  'register' => false, 
  'reset' => false, 
  'verify' => false, 
]);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/', 'HomeController@index')->name('web.index');

Route::get('/farmacie/about-us','CatalogController@aboutus')->name('web.aboutus');
Route::get('/farmacie/contact','CatalogController@contact')->name('web.contact');
Route::get('/categories', 'CatalogController@index')->name('web.categories.index');
Route::get('/sectors', 'CatalogController@getsectors')->name('web.sectors.index');
Route::get('/product{id}', 'ProduceController@show')->name('web.products.show');
Route::post('/products', 'ProduceController@store')->name('web.products.store');


Route::prefix('manage')->middleware('auth')->group(function() {

	Route::get('/users', 'UserController@index')->name('manage.users.index');
	Route::get('/users/create', 'UserController@create')->name('manage.users.create');
	Route::post('/users', 'UserController@store')->name('manage.users.store');
	Route::get('/users/{id}', 'UserController@show')->name('manage.users.show');
	Route::get('/users/{id}/edit', 'UserController@edit')->name('manage.users.edit');
	Route::put('/users/{id}', 'UserController@update')->name('manage.users.update');

	Route::get('/categories', 'CategoryController@index')->name('manage.categories.index');
	Route::get('/categories/create', 'CategoryController@create')->name('manage.categories.create');
	Route::post('/categories', 'CategoryController@store')->name('manage.categories.store');
	Route::get('/categories/{id}', 'CategoryController@show')->name('manage.categories.show');
	Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('manage.categories.edit');
	Route::put('/categories/{id}', 'CategoryController@update')->name('manage.categories.update');

	Route::get('/sectors', 'SectorController@index')->name('manage.sectors.index');

	Route::get('/streets', 'StreetController@index')->name('manage.streets.index');
	Route::get('/streets/create', 'StreetController@create')->name('manage.streets.create');
	Route::post('/streets', 'StreetController@store')->name('manage.streets.store');
	Route::get('/streets/{id}', 'StreetController@show')->name('manage.streets.show');

	Route::get('/regions', 'RegionController@index')->name('manage.regions.index');
	Route::get('/regions/create', 'RegionController@create')->name('manage.regions.create');
	Route::post('regions', 'RegionController@store')->name('manage.regions.store');

	Route::get('/products', 'ProductController@index')->name('manage.products.index');
	Route::get('/products/create', 'ProductController@create')->name('manage.products.create');
	Route::post('/products', 'ProductController@store')->name('manage.products.store');
	Route::get('/products/{id}', 'ProductController@show')->name('manage.products.show');
	Route::get('/products/{id}/edit', 'ProductController@edit')->name('manage.products.edit');
	Route::put('/products/{id}', 'ProductController@update')->name('manage.products.update');

	Route::get('/similarproducts/create', 'SimilarController@create')->name('manage.similarproducts.create');
	Route::post('/similarproducts', 'SimilarController@store')->name('manage.similarproducts.store');

	Route::get('/countries/create', 'CountryController@create')->name('manage.countries.create');
	Route::post('/countries', 'CountryController@store')->name('manage.countries.store');

	Route::get('/sales/create', 'SaleController@create')->name('manage.sales.create');
	Route::post('/sales', 'SaleController@store')->name('manage.sales.store');

	Route::get('/pharmacies', 'PharmacyController@index')->name('manage.pharmacies.index');
	Route::get('/pharmacies/create', 'PharmacyController@create')->name('manage.pharmacies.create');
	Route::post('/pharmacies', 'PharmacyController@store')->name('manage.pharmacies.store');
	Route::get('/pharmacies/{id}', 'PharmacyController@show')->name('manage.pharmacies.show');
	Route::get('/pharmacies{id}/edit', 'PharmacyController@edit')->name('manage.pharmacies.edit');
	Route::put('/pharmacies/{id}', 'PharmacyController@update')->name('manage.pharmacies.update');

});


