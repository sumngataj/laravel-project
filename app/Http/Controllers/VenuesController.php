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
            'amenities' => 'required'
        ]);

        Venues::create($request->all());

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
        $venue = Venues::findOrFail($venue_id);

        $data = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'capacity' => 'required',
            'amenities' => 'required',
        ]);

        $venue->update($data);

        return redirect()->route('venues.index')
                        ->with('success','Venue updated successfully'); 
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
