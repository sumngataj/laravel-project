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
Route::get('/booking', function () {
    return view('booking');
});


Route::get('/modal', function () {
    return view('admin.navbarsample');
});
Route::get('/edit', function () {
    return view('admin.modalforms.edit');
});



Route::middleware('auth', 'isSuperUser')->group(function(){
    Route::resource('packages', PackagesController::class);
    Route::resource('venues', VenuesController::class);
    Route::get('admin', [LoginRegisterController::class, 'dashboard'])->name('dashboard');
});
    


    Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
    Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
    Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
    Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
    
    Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');