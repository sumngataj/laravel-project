<?php

namespace App\Http\Controllers;

use App\Events\NewNotification;
use App\Models\Packages;
use App\Models\Notification;
use App\Models\Venues;
use App\Models\Reservation;
use App\Models\User;
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
        $users = User::all();
        // $packages = Packages::all();
        $venues = Venues::all();
        
        $notifications = Notification::orderBy('created_at', 'desc')->get();
        $reservations = Reservation::with(['user', 'venue'])
        ->where('status', 'pending')
        ->latest()
        ->paginate(7);

        $bookingsCount = Reservation::where('status', 'booked')->count();

        return view('admin.index', compact('reservations', 'bookingsCount', 'venues', 'users','notifications'));
    }

    public function booked()
    {
        $users = User::all();
        $packages = Packages::all();
        $venues = Venues::all();
        $notifications = Notification::orderBy('created_at', 'desc')->get();

        // Filter reservations with the 'booked' status
        $reservations = Reservation::with(['user', 'venue', 'package'])
            ->where('status', 'booked')
            ->latest()
            ->paginate(7);

        return view('admin.booked', compact('reservations', 'packages', 'venues', 'users','notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $venues = Venues::all();
        // $packages = Packages::all();

        // return view('admin.reservation', compact('venues', 'packages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|numeric',
            'venue_id' => 'required|numeric',
            'package_id' => 'required|numeric',
            'reservation_date' => 'required|date',
            'price' => 'required|numeric',
        ]);

        // Create a new reservation record
        $reservation = new Reservation();
        $reservation->user_id = $validatedData[ 'user_id' ];
        $reservation->venue_id = $validatedData['venue_id'];
        $reservation->package_id = $validatedData['package_id'];
        $reservation->reservation_date = $validatedData['reservation_date'];
        $reservation->price = $validatedData['price'];
        $reservation->status = 'pending';


        try {
            $reservation->save();
        } catch (\Exception $e) {
            // Log or print the exception message for debugging
            dd($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while saving the reservation.');
        }
        
        return back()->with('success', 'Reservation created successfully.');
    }


    public function custom(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|numeric',
            'venue_id' => 'required|numeric',
            'reservation_date' => 'required|date',
            'price' => 'required|numeric',
            'guests' => 'required',
            'add_ons' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'mobile_number' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        // Create a new reservation record
        $reservation = new Reservation();
        $reservation->user_id = $validatedData['user_id'];
        $reservation->venue_id = $validatedData['venue_id'];
        $reservation->reservation_date = $validatedData['reservation_date'];
        $reservation->price = $validatedData['price'];
        $reservation->guests = $validatedData['guests'];
        $reservation->add_ons = $validatedData['add_ons'];
        $reservation->first_name = $validatedData['first_name'];
        $reservation->last_name = $validatedData['last_name'];
        $reservation->phone = $validatedData['phone'];
        $reservation->mobile_number = $validatedData['mobile_number'];
        $reservation->email = $validatedData['email'];
        $reservation->address = $validatedData['address'];
        $reservation->status = 'pending';

        $name = $request->first_name;
        $uploaded = now();
      
      

        $notification = new Notification();
        $notification->user_id = $validatedData['user_id'];
        $notification->venue_id = $validatedData['venue_id'];
        $notification->status = 0;
        $notification->uploaded = now();
         

        try {
            $reservation->save();
            event(new NewNotification($name, $uploaded));
            $notification->save();
       

        } catch (\Exception $e) {
            // Log or print the exception message for debugging
            dd($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while saving the reservation.');
        }
        
        return back()->with('success', 'Reservation created successfully.');
    }
    
    public function cancelReservation($id)
    {
    // Find the reservation by ID
    $reservation = Reservation::find($id);

    // Check if the reservation exists
    if (!$reservation) {
        return redirect()->back()->with('error', 'Reservation not found');
    }

    // Update the reservation status
    $reservation->update(['status' => 'Cancelled']);

    return redirect()->back()->with('success', 'Reservation cancelled successfully');
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
    public function update(Request $request, $reservation_id)
    {
        $reservation = Reservation::findOrFail($reservation_id);

        $reservation->status = 'booked';

        $reservation->save();

        return back()->with('success', 'Reservation status updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}