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
    $makeup = Addons::where('category', 'makeup')->latest()->get();
    $lighting = Addons::where('category', 'lighting')->latest()->get();
    $sound = Addons::where('category', 'sound')->latest()->get();
    $vehicles = Addons::where('category', 'vehicles')->latest()->get();
    $sweets = Addons::where('category', 'sweets')->latest()->get();
    $botiques = Addons::where('category', 'botiques')->latest()->get();
    return view('custombooking', compact('venues', 'catering', 'cake', 'flower', 'photographers', 'makeup', 'lighting', 'sound', 'vehicles', 'sweets', 'botiques'));
  }
}