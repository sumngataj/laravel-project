<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\Venues;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Packages::all();
        $venues = Venues::all();

        $reservations = Reservation::with(['user', 'venue', 'package'])->paginate(7);

        return view('admin.reservations', compact('reservations', 'packages', 'venues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $venues = Venues::all();
        $packages = Packages::all();

        return view('admin.reservation', compact('venues', 'packages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sessionId = session()->getId();

        $validatedData = $request->validate([
            'user_id' => 'required|numeric',
            'venue_id' => 'required|numeric',
            'package_id' => 'required|numeric',
            'reservation_date' => 'required',
            // Add validation rules for other fields here
        ]);

        // Create a new reservation record
        $reservation = new Reservation();
        $reservation->user_id = $sessionId;
        $reservation->venue_id = $validatedData['venue_id'];
        $reservation->package_id = $validatedData['package_id'];
        $reservation->reservation_date = $validatedData['reservation_date'];
        // Set other fields here


        // Reservation::create($request->all());

        try {
            $reservation->save();
        } catch (\Exception $e) {
            // Log or print the exception message for debugging
            dd($e->getMessage());
        }
        
        return redirect()->route('reservations.index')->with('success', 'Reservation created successfully.');
    }

    // public function store(Request $request)
    // {
    //     $sessionId = session()->getId();

    //     $validatedData = $request->validate([
    //         'user_id' => 'required|numeric',
    //         'venue_id' => 'required|numeric',
    //         'package_id' => 'required|numeric',
    //         'reservation_date' => 'required',
    //         // Add validation rules for other fields here
    //     ]);

    //     try {
    //         // Create a new reservation record
    //         $reservation = new Reservation([
    //             'user_id' => $sessionId,
    //             'venue_id' => $validatedData['venue_id'],
    //             'package_id' => $validatedData['package_id'],
    //             'reservation_date' => $validatedData['reservation_date'],
    //             // Set other fields here
    //         ]);

    //         $reservation->save();
            
    //         return redirect()->route('reservations.index')->with('success', 'Reservation created successfully.');
    //     } catch (\Exception $e) {
    //         // Log or print the exception message for debugging
    //         dd($e->getMessage());
    //     }
    // } The error must be on the modals

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
