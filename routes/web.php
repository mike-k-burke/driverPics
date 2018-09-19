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

Route::resource('drivers', 'DriverController');
Route::resource('loads', 'LoadController');
Route::resource('vehicles', 'VehicleController');
Route::resource('images', 'ImageController');

Route::get('/loads/{loadId}/addVehicle', 'LoadController@add');