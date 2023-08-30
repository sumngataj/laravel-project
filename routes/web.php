<?php

use Illuminate\Support\Facades\Route;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

Route::get('/', function(){
    return view ('index');
});

Route::get('home', function () {
    return view('home');
    
});
Route::post('/sendmessage', function(Request $request){
    event(new Message($request->input('message')));
    return["success"=> true];
});
Route::get('/sendmessage', function () {
    return view('index');
});