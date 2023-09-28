<?php

namespace App\Http\Controllers;

use App\Models\Venues;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class VenuesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $venues = Venues::latest()->paginate(7);

    return view('admin.venues', ['venues' => $venues]);
    }
      
    public function displayAllVenues(): View
    {
        $venues = Venues::all();

    return view('home', ['venues' => $venues]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'capacity' => 'required',
            'amenities' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif|max:5048',
        ]);

        $newImageName = time() . '-' . $request->name . '.' . $request->file('image')->extension();

        $request->image->move(public_path('images/venue_images'), $newImageName);

        Venues::create([
            'name' => $request->name,
            'location' => $request->location,
            'capacity' => $request->capacity,
            'amenities' => $request->amenities,
            'image_path' => $newImageName,
        ]);

        return back()->with('success', 'Venue created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Venues $venues)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($venue_id)
    {
        $venue = Venues::findOrFail($venue_id);
        return view('admin.modalforms.edit', ['venue' => $venue]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $venue_id)
    {
        // Find the venue by ID
        $venue = Venues::findOrFail($venue_id);

        // Validate the form input fields
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'capacity' => 'required',
            'amenities' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif|max:5048', // Image validation rules
        ]);

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Generate a unique file name for the new image
            $newImageName = time() . '-' . $request->name . '.' . $request->file('image')->extension();

            // Move the new uploaded image to the public directory
            $request->file('image')->move(public_path('images/venue_images'), $newImageName);

            // Delete the old image file if it exists
            if ($venue->image_path && file_exists(public_path('images/venue_images/' . $venue->image_path))) {
                unlink(public_path('images/venue_images/' . $venue->image_path));
            }

            // Update the image_path field with the new image name
            $venue->image_path = $newImageName;
        }

        // Update other fields with the validated data
        $venue->name = $request->name;
        $venue->location = $request->location;
        $venue->capacity = $request->capacity;
        $venue->amenities = $request->amenities;

        // Save the updated venue record
        $venue->save();

        // Redirect to the index page with a success message
        return redirect()->route('venues.index')
                        ->with('success', 'Venue updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($venue_id): RedirectResponse
    {
        $venue = Venues::findOrFail($venue_id);

        if ($venue) {
            $venue->delete();

            return redirect()->route('venues.index')
                            ->with('success', 'Venue deleted successfully');
        } else {
            return redirect()->route('venues.index')
                            ->with('error', 'Venue not found');
        }
    }
}