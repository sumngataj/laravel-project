<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\Venues;
use App\Models\Addons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class CustomBookingController extends Controller
{
  public function index(): View{
    $venues = Venues::all();
    $catering = Addons::where('category', 'catering')->latest()->get();
    $cake = Addons::where('category', 'cake')->latest()->get();
    $flower = Addons::where('category', 'flower')->latest()->get();
    $photographers = Addons::where('category', 'photographers')->latest()->get();
    return view('custombooking', ['venues'=>$venues, 'catering' => $catering, 'cake' => $cake, 'flower' => $flower, 'photographers' => $photographers]);
  }
}