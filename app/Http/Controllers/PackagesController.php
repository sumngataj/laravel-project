<?php

namespace App\Http\Controllers;

use App\Models\Packages;
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
            'price' => 'required'
        ]);

        Packages::create($request->all());

        return back()->with('success', 'Package created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Packages $packages)
    {
        //
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
        $package = Packages::findOrFail($package_id);

        $data = $request->validate([
            'package_name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $package->update($data);

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
