<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\Venues;
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
        $packages = Packages::latest()->paginate(7);

    return view('admin.packages', ['packages' => $packages]);
    }

    public function displayAll(): View
    {
        $packages = Packages::all();
        $venues = Venues::all();

    return view('home', ['packages' => $packages], ['venues'=>$venues]);
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
            'package_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif|max:5048'
        ]);

        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        
        $request->image->move(public_path('images/package_images'), $newImageName);

        $package = new Packages([
            'package_name' => $request->package_name,
            'description' => $request->description,
            'price' => $request->price,
            'image_path' => $newImageName,
        ]);
    
        $package->save();

        return back()->with('success', 'Package created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // return view('booking',compact('packages'));
    }

    public function displayById($package_id): View
    {
        $package = Packages::findOrFail($package_id);
        $venues = Venues::all();
        return view('booking', ['package' => $package],['venues'=>$venues]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($package_id)
    {
        $package = Packages::findOrFail($package_id);
        return view('admin.modalforms.editPackage', ['package' => $package]);
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