<?php

namespace App\Http\Controllers;

use App\Models\Venues;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Packages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProfileController extends Controller
{
      public function displayByProfileId($user_id): View
    {
        $reservations = Reservation::with('venue', 'package')->where('user_id', $user_id)->get(); 
        return view('profile', ['reservations' => $reservations]);
    }
}