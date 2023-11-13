<?php

namespace App\Http\Controllers;

use App\Models\Addons;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AddonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $addons = Addons::latest()->paginate(3);
        $catering = Addons::where('category', 'catering')->latest()->paginate(3);
        $cake = Addons::where('category', 'cake')->latest()->paginate(3);
        $flower = Addons::where('category', 'flower')->latest()->paginate(3);
        $notifications = Notification::all();

        return view('admin.addons', ['addons' => $addons, 'catering' => $catering, 'cake' => $cake, 'flower' => $flower, 'notifications' => $notifications]);
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
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);


        Addons::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return back()->with('success', 'Add-ons created successfully.');
    }

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
    public function edit($addons_id)
    {
        $addon = Addons::findOrFail($addons_id);
        $notifications = Notification::all();
        return view('admin.modalforms.editAddons', ['addon' => $addon, 'notifications' => $notifications]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $addons_id)
    {
        $addon = Addons::findOrFail($addons_id);

        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $addon->name = $request->name;
        $addon->category = $request->category;
        $addon->description = $request->description;
        $addon->price = $request->price;

        $addon->save();

        return redirect()->route('addons.index')
                        ->with('success', 'Add-ons updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($addons_id)
    {
        $addon = Addons::findOrFail($addons_id);

        if($addon) {
            $addon->delete();

            return redirect()->route('addons.index')
                            ->with('success', 'Item successfully deleted');
        } else {
            return redirect()->route('addons.index')
                            ->with('error', 'Item not found');
        }
    }
}
