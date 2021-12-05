<?php

use Illuminate\Support\Facades\Route;

// Frontend
use App\Http\Controllers\Frontend\HomeController;
// use App\Http\Controllers\Frontend\GalleryController;

// Backend
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\PassengersController;
use App\Http\Controllers\Backend\DriverController;
use App\Http\Controllers\Backend\CounterController;
use App\Http\Controllers\Backend\BusController;
use App\Http\Controllers\Backend\BusRouteController;
use App\Http\Controllers\Backend\SeatController;
use App\Http\Controllers\Backend\LocationController;

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

//for User
// Route::get('/', function () {
//     return view('frontend.index');
// });

// Frontend
Route::get('/home',[HomeController::class,'home']);

// for Admin
Route::get('/', function () {
    return view('admin.master');
});

//Dashboard
Route::get ('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

// Passengers
Route::get('/passengers/list', [PassengersController::class, 'list'])->name('admin.passengers');
Route::get('/passengers/create', [PassengersController::class, 'create'])->name('admin.passengers.create');
Route::post('/passengers/store', [PassengersController::class, 'store'])->name('admin.passengers.store');

// Location
Route::get('/location/list', [LocationController::class, 'list'])->name('admin.location');
Route::get('/location/create', [LocationController::class, 'create'])->name('admin.location.create');
Route::post('/location/store', [LocationController::class, 'store'])->name('admin.location.store');

// Driver
Route::get('/driver/list', [DriverController::class, 'list'])->name('admin.driver');
Route::get('/driver/create', [DriverController::class, 'create'])->name('admin.driver.create');
Route::post('/driver/store', [DriverController::class, 'store'])->name('admin.driver.store');

//Counter
Route::get('/counter/list', [CounterController::class, 'list'])->name('admin.counter');
Route::get('/counter/create', [CounterController::class, 'create'])->name('admin.counter.create');
Route::post('/counter/store', [CounterController::class, 'store'])->name('admin.counter.store');

// Bus
Route::get('/bus/list', [BusController::class, 'list'])->name('admin.bus');
Route::get('/bus/create', [BusController::class, 'create'])->name('admin.bus.create');
Route::post('/bus/store', [BusController::class, 'store'])->name('admin.bus.store');

// BusRoute
Route::get('/busroute/list', [BusRouteController::class, 'list'])->name('admin.busroute');
Route::get('/busroute/create', [BusRouteController::class, 'create'])->name('admin.busroute.create');
Route::post('/busroute/store', [BusRouteController::class, 'store'])->name('admin.busroute.store');

// Seat
Route::get('/seat/list', [SeatController::class, 'list'])->name('admin.seat');
Route::get('/seat/create', [SeatController::class, 'create'])->name('admin.seat.create');
// Route::post('/seat/store', [SeatController::class, 'store'])->name('admin.seat.store');

// Seat Booking
Route::get('/seat booking/list', [SeatBookingController::class, 'list'])->name('admin.seatbooking');
Route::get('/seat booking/create', [SeatBookingController::class, 'create'])->name('admin.seatbooking.create');
// Route::post('/seat/store', [SeatController::class, 'store'])->name('admin.seat.store');