<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PassengersController;
use App\Http\Controllers\Backend\DriverController;

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
    return view('admin.master');
});

// Passengers
Route::get('/passengers/list', [PassengersController::class, 'list'])->name('admin.passengers');
Route::get('/passengers/create', [PassengersController::class, 'create'])->name('admin.passengers.create');
Route::post('/passengers/store', [PassengersController::class, 'store'])->name('admin.passengers.store');

// Driver
Route::get('/driver/list', [DriverController::class, 'list'])->name('admin.driver');
Route::get('/driver/create', [DriverController::class, 'create'])->name('admin.driver.create');
Route::post('/driver/store', [DriverController::class, 'store'])->name('admin.driver.store');
