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

/**
 * Controller for item page
 */
Route::get('/item', 'ItemController@index')->name('home');
Route::post('/item/store', 'ItemController@store');
Route::get('/item/create', 'ItemController@create');
Route::get('/item/{code}', 'ItemController@show');
Route::get('/item/{code}/edit', 'ItemController@edit');
Route::post('/item/{code}/update', 'ItemController@update');

/**
 * Route for distributor page
 *  */
Route::get('/distributor', 'DistributorController@index');
Route::post('/distributor/store', 'DistributorController@store');
Route::get('/distributor/create', 'DistributorController@create');
Route::get('/distributor/{code}', 'DistributorController@show');
Route::get('/distributor/{code}/edit', 'DistributorController@edit');
Route::post('/distributor/{code}/update', 'DistributorController@update');

/**
 * Route for item of distributor page
 */
Route::get('/distributor/{distributor_id}/add_item', 'DistributorItemController@create');
Route::post('/distributor/{distributor_id}/store_item', 'DistributorItemController@store');
Route::get('/distributor/{distributor_id}/delete_item/{item_id}', 'DistributorItemController@delete');
Route::get('/distributor/{distributor_id}/edit_item/{item_id}', 'DistributorItemController@edit');
Route::post('/distributor/{distributor_id}/update_item/{item_id}', 'DistributorItemController@update');

/**
 * Route for register page
 */
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

/**
 * Route for session
 */
Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');