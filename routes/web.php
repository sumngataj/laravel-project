<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\VenuesController;
use App\Http\Controllers\PackagesController;
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
//     return view('index');
// });

// Route::get('/admin', function () {
//     return view('admin.index'); 
// });
// Route::get('admin/bookings', function () {
//     return view('admin.bookings');
    
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/modal', function () {
    return view('admin.navbarsample');
});

    

Route::middleware('auth', 'isSuperUser')->group(function(){
    Route::get('packages', [PackagesController::class, 'index'])->name('admin.packages');
    // Route::get('/venues', [VenuesController::class, 'index'])->name('admin.venues.index');
    // Route::post('/venues', [VenuesController::class, 'store'])->name('admin.venues');
    // Route::post('/venues', [VenuesController::class, 'update'])->name('admin.venues.update');
    Route::resource('venues', VenuesController::class);
    Route::get('admin', [LoginRegisterController::class, 'dashboard'])->name('dashboard');
});
    


    Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
    Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
    Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
    Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
    
    Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
