<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\AdminLoginController  as AdminUserController;

// Frontend
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\BookingController;

// Backend
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\DriverController;
use App\Http\Controllers\Backend\CounterController;
use App\Http\Controllers\Backend\BusController;
use App\Http\Controllers\Backend\BusRouteController;
use App\Http\Controllers\Backend\SeatController;
use App\Http\Controllers\Backend\SeatBookingController;


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
                                                                          
//For Admin
Route::group(['prefix'=>'/'],function(){
Route::get('/login',[AdminUserController::class, 'login'])->name('admin.login');
Route::post('/login',[AdminUserController::class, 'doLogin'])->name('admin.doLogin');

Route::group(['middleware'=>'auth'],function (){
        Route::get('/', function () {
            return view('admin.master');
        })->name('admin.dashboard');
    
// Admin Login

Route::get('/logout',[AdminUserController::class,'logout'])->name('admin.logout');

//Dashboard
Route::get ('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

// Passenger List
Route::get('/user/list', [UserController::class, 'list'])->name('admin.user');

// Location
Route::get('/location/list', [LocationController::class, 'list'])->name('admin.location');
Route::get('/location/view/{location_id}',[LocationController::class, 'locationDetails'])->name('admin.location.details');
Route::get('/location/delete/{location_id}',[LocationController::class, 'locationDelete'])->name('admin.location.delete');
Route::get('/location/edit/{id}',[LocationController::class,'locationEdit'])->name('admin.location.edit');
Route::put('/location/update/{id}',[LocationController::class,'locationUpdate'])->name('admin.location.update');
Route::get('/location/create', [LocationController::class, 'create'])->name('admin.location.create');
Route::post('/location/store', [LocationController::class, 'store'])->name('admin.location.store');

// Driver
Route::get('/driver/list', [DriverController::class, 'list'])->name('admin.driver');
Route::get('/driver/create', [DriverController::class, 'create'])->name('admin.driver.create');
Route::get('/driver/view/{counter_id}',[DriverController::class, 'driverDetails'])->name('admin.driver.details');
Route::get('/driver/delete/{counter_id}',[DriverController::class, 'driverDelete'])->name('admin.driver.delete');
Route::post('/driver/store', [DriverController::class, 'store'])->name('admin.driver.store');

//Counter
Route::get('/counter/list', [CounterController::class, 'list'])->name('admin.counter');
Route::get('/counter/view/{counter_id}',[CounterController::class, 'counterDetails'])->name('admin.counter.details');
Route::get('/counter/delete/{counter_id}',[CounterController::class, 'counterDelete'])->name('admin.counter.delete');
Route::get('/counter/create', [CounterController::class, 'create'])->name('admin.counter.create');
Route::post('/counter/store', [CounterController::class, 'store'])->name('admin.counter.store');

// Bus
Route::get('/bus/list', [BusController::class, 'list'])->name('admin.bus');
Route::get('/bus/view/{bus_id}',[BusController::class, 'busDetails'])->name('admin.bus.details');
Route::get('/bus/delete/{bus_id}',[BusController::class, 'busDelete'])->name('admin.bus.delete');
Route::get('/bus/create', [BusController::class, 'create'])->name('admin.bus.create');
Route::post('/bus/store', [BusController::class, 'store'])->name('admin.bus.store');
Route::get('/bus/search',[BusController::class,'busSearch'])->name('admin.bus.search');

// BusRoute
Route::get('/busroute/list', [BusRouteController::class, 'list'])->name('admin.busroute');
Route::get('/busroute/view/{busroute_id}',[BusRouteController::class, 'bus_route_Details'])->name('admin.bus_route.details');
Route::get('/busroute/delete/{busroute_id}',[BusRouteController::class, 'bus_route_Delete'])->name('admin.bus_route.delete');
Route::get('/busroute/create', [BusRouteController::class, 'create'])->name('admin.busroute.create');
Route::post('/busroute/store', [BusRouteController::class, 'store'])->name('admin.busroute.store');

// Seat
Route::get('/seat/list', [SeatController::class, 'list'])->name('admin.seat');
Route::get('/seat/view/{id}',[SeatController::class, 'seatDetails'])->name('admin.seat.details');
Route::get('/seat/edit/{id}',[SeatController::class,'seatEdit'])->name('admin.seat.edit');
Route::put('/seat/update/{id}',[SeatController::class,'seatUpdate'])->name('admin.seat.update');
Route::get('/seat/delete/{id}',[SeatController::class, 'seatDelete'])->name('admin.seat.delete');
Route::get('/seat/create', [SeatController::class, 'create'])->name('admin.seat.create');
Route::post('/seat/store', [SeatController::class, 'store'])->name('admin.seat.store');

// Seat Booking
Route::get('/seat booking/list', [SeatBookingController::class, 'list'])->name('admin.seatbooking');
Route::get('/seat booking/create', [SeatBookingController::class, 'create'])->name('admin.seatbooking.create');
// Route::post('/seat/store', [SeatController::class, 'store'])->name('admin.seat.store');

// Frontend
Route::get('/home',[HomeController::class,'home'])->name('frontend.home');
Route::get('/user/registration',[LoginController::class,'registration'])->name('user.registration');
Route::post('/user/registration/post',[LoginController::class,'registrationPost'])->name('user.registration.post');
Route::get('/user/login',[LoginController::class,'login'])->name('user.login');
Route::post('/user/do/login',[LoginController::class,'doLogin'])->name('user.do.login');
Route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');

// Booking
Route::get('/booking',[BookingController::class,'booking'])->name('frontend.booking');

});
});