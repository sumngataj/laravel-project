<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\VenuesController;
use App\Http\Controllers\AddonsController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\CustomBookingController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PusherController;



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

Route::get('/', [PackagesController::class, 'displayRate']);

Route::get('/payment', function () {
    return view('payment-form');
});


// Route::get('/packages-view', function () {
//     return view('allpackages');
// });
Route::post('/payment', [ReservationController::class, 'sendpayment'])->name('reservation.sendpayment');
// Route::put('/reservation/{reservation_id}/sendpayment', [ReservationController::class, 'sendpayment'])-> name('reservation.sendpayment');

Route::get('/packages-view', [PackagesController::class, 'displayAll'])->name('packages-view');
Route::get('/venue/{venue_id}', [VenuesController::class, 'displayById'])->name('venues.displayById');
Route::get('/profile/{user_id}',[ProfileController::class, 'displayByProfileId'])->name('profile.displayByProfileId');
Route::post('/cancel-reservation/{id}', [ReservationController::class, 'cancelReservation'])->name('reservation.cancelReservation');
Route::get('/search', [SearchController::class, 'search'])->name('searchResult');


    Route::post('/broadcast', [PusherController::class, 'broadcast'])->name('broadcast');
Route::post('/receive', [PusherController::class, 'receive'])->name('receive');


Route::middleware('guest')->group(function(){
    Route::get('/adminlogin', function () {
        return view('admin.login');
    });
});

Route::middleware('isSuperUser')->group(function(){


    Route::resource('packages', PackagesController::class);
    Route::resource('venues', VenuesController::class);
    Route::resource('addons', AddonsController::class);

    Route::controller(LoginRegisterController::class)->group(function() {
        Route::get('/admin', [ReservationController::class, 'index'])->name('dashboard');
        Route::put('/reservation/{reservation_id}/update', [ReservationController::class, 'update'])-> name('reservation.update');
        Route::put('/reservation/{reservation_id}/book', [ReservationController::class, 'book'])-> name('reservation.book');
        Route::put('/reservation/{reservation_id}/decline', [ReservationController::class, 'decline'])-> name('reservation.decline');
        Route::get('/reservations', [ReservationController::class, 'booked'])->name('admin.booked');
        Route::put('/mark-notifications-as-read', [NotificationController::class, 'markAsRead'])->name('markAsRead');
        Route::get('/payments', [ReservationController::class, 'allpayments'])->name('admin.payments');

        // Route::resource('reservations', ReservationController::class);
    });
    
});
   

//user
Route::middleware('auth')->group(function(){
    Route::get('/booking/{package_id}', [PackagesController::class, 'displayById'])->name('packages.displayById');

    // Route::group(['prefix' => 'booking/{package_id}'], function () {
    //     Route::get('/', [PackagesController::class, 'displayById'])->name('packages.displayById');
    //     Route::post('/rate', [RatingController::class, 'store']) ->name('ratings.store');
        
    // }); 

    Route::post('ratings.store', [RatingController::class, 'store']) ->name('ratings.store');
    Route::post('/', [ReservationController::class, 'store'])->name('reservations.store');

    // Route::get('/custombooking', [CustomBookingController::class, 'index'])->name('custom.booking');

    Route::group(['prefix' => 'custombooking'], function () {
        Route::get('/', [CustomBookingController::class, 'index'])->name('custom.booking');
        Route::post('/custom', [ReservationController::class, 'custom'])->name('reservations.custom');
        // Route::get('/custombooking/{venue_id}', [VenuesController::class, 'displayById'])->name('venues.displayById');
    });
});


Route::middleware('guest')->group(function(){
    Route::get('/login', [PackagesController::class, 'loginNi'])->name('login');
});

//daan
    // Route::controller(LoginRegisterController::class)->group(function() {
    //     Route::get('/login', [PackagesController::class, 'loginNi'])->name('login');
   
    // });
///

    Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
    Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
    Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');   
    Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
    Route::post('/adminlogout', [LoginRegisterController::class, 'adminlogout'])->name('adminlogout');