<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\Venues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class CustomBookingController extends Controller
{
  public function index(): View{
    $venues = Venues::all();
    return view('custombooking', ['venues'=>$venues]);
  }
}