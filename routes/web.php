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

Route::resource('drivers', 'DriverController', [
        'except' => ['show']
    ])->names([
        'index' 	=> 'driver',
        'create' 	=> 'driver.create',
        'store' 	=> 'driver.store',
        'edit' 		=> 'driver.edit',
        'update'	=> 'driver.update',
        'destroy'	=> 'driver.destroy'
    ]);

Route::resource('loads', 'LoadController', [
        'except' => ['show']
    ])->names([
        'index' 	=> 'load',
        'create' 	=> 'load.create',
        'store' 	=> 'load.store',
        'edit' 		=> 'load.edit',
        'update'	=> 'load.update',
        'destroy'	=> 'load.destroy'
    ]);

Route::get('/loads/{id}/addVehicle', 'LoadController@add')->name('load.vehicle.add');

Route::resource('vehicles', 'VehicleController', [
        'except' => ['show']
    ])->names([
        'index' 	=> 'vehicle',
        'create' 	=> 'vehicle.create',
        'store' 	=> 'vehicle.store',
        'edit' 		=> 'vehicle.edit',
        'update'	=> 'vehicle.update',
        'destroy'	=> 'vehicle.destroy'
    ]);
Route::resource('images', 'ImageController', [
        'except' => ['show']
    ])->names([
        'index' 	=> 'image',
        'create' 	=> 'image.create',
        'store' 	=> 'image.store',
        'edit' 		=> 'image.edit',
        'update'	=> 'image.update',
        'destroy'	=> 'image.destroy'
    ]);
