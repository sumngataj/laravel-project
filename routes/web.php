<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\VenuesController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [PackagesController::class, 'displayAll']);
Route::get('/get-venue-data/{venueName}', 'VenueController@getVenueData');


Route::get('/adminlogin', function () {
    return view('admin.login');
});


Route::middleware('isSuperUser')->group(function(){
    Route::resource('packages', PackagesController::class);
    Route::resource('venues', VenuesController::class);

    Route::controller(LoginRegisterController::class)->group(function() {
        Route::get('/admin', [ReservationController::class, 'index'])->name('dashboard');
        Route::put('/reservation/{reservation_id}/update', [ReservationController::class, 'update'])-> name('reservation.update');
        Route::get('/bookings', [ReservationController::class, 'booked'])->name('admin.booked');
        // Route::resource('reservations', ReservationController::class);
    });
    
});
   


Route::middleware('auth')->group(function(){
    Route::get('/booking/{package_id}', [PackagesController::class, 'displayById'])->name('packages.displayById');
    Route::post('/', [ReservationController::class, 'store'])->name('reservations.store');
});

    Route::controller(LoginRegisterController::class)->group(function() {
        Route::get('/login', [PackagesController::class, 'displayAll'])->name('login');
    });

    Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
    Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
    Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');   
    Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');