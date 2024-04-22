<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\Notification;
use App\Models\Venues;
use App\Models\Ratings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $venues = Venues::all();
            $notifications = Notification::all();
        $averageRatings = Ratings::select('package_id', DB::raw('AVG(rating) as average_rating'))
        ->groupBy('package_id')
        ->get();

        $packages = Packages::with(['venue'])->latest()->paginate(7);

    return view('admin.packages', compact('packages', 'venues', 'averageRatings', 'notifications'));
    }

    public function displayAll(): View
    {
        $packages = Packages::all();
        $venues = Venues::all();
        $notifications = Notification::all();
        $ratings = Ratings::inRandomOrder()
    ->take(3)
    ->get();

        $averageRatings = Ratings::select('package_id', DB::raw('AVG(rating) as average_rating'))
        ->groupBy('package_id')
        ->get();

    return view('home', ['packages' => $packages, 'venues' => $venues, 'averageRatings' => $averageRatings, 'notifications' => $notifications, 'ratings' => $ratings]);
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
            'venue_id' => 'required|numeric',
            'package_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif|max:5048'
        ]);

        // Generate a unique image name
        $newImageName = time() . '-' . $request->package_name . '.' . $request->image->extension();

        // Move the uploaded image to the desired directory
        $request->image->move(public_path('images/package_images'), $newImageName);

        // Create a new package using mass assignment
        $package = Packages::create([
            'venue_id' => $request->venue_id,
            'package_name' => $request->package_name,
            'description' => $request->description,
            'price' => $request->price,
            'image_path' => $newImageName,
        ]);

        return back()->with('success', 'Package created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Packages $packages)
    {
        // return view('booking',compact('packages'));
    }

    public function displayById($package_id): View
    {
        $venues = Venues::all();
        $ratings = Ratings::all();
        $packages = Packages::all();
        $package = Packages::findOrFail($package_id);
        return view('booking', ['package' => $package], compact('venues', 'packages', 'ratings'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($package_id)
    {
        $package = Packages::findOrFail($package_id);
        $venues = Venues::all();
        $notifications = Notification::all();
        return view('admin.modalforms.editPackage', ['package' => $package, 'venues' => $venues, 'notifications' => $notifications]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $package_id)
    {
        // Find the package by ID
        $package = Packages::findOrFail($package_id);
    
        // Validate the form input fields
        $request->validate([
            'venue_id' => 'required|numeric',
            'package_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif|max:5048',
        ]);
    
        if ($request->hasFile('image')) {
            $newImageName = time() . '-' . $request->package_name . '.' . $request->file('image')->extension();
    
            $request->file('image')->move(public_path('images/package_images'), $newImageName);
    
            if ($package->image_path && file_exists(public_path('images/package_images/' . $package->image_path))) {
                unlink(public_path('images/package_images/' . $package->image_path));
            }
    
            $package->image_path = $newImageName;
        }
        
        $package->venue_id = $request->venue_id;
        $package->package_name = $request->package_name;
        $package->description = $request->description;
        $package->price = $request->price;
    
        $package->save();
    
        return redirect()->route('packages.index')
                        ->with('success', 'Package updated successfully');
    }    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($package_id)
    {
        try {
            $package = Packages::findOrFail($package_id);
            $package->delete();

            return redirect()->route('packages.index')
                            ->with('success', 'Venue deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('packages.index')
                            ->with('error', 'Venue not found');
        }
    }

}