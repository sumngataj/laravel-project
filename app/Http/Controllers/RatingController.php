<?php

namespace App\Http\Controllers;

use App\Models\Ratings;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        // Fetch a list of ratings and return a view or JSON response.
        $ratings = Ratings::all();
        return view('ratings.index', compact('ratings'));
    }

    public function create()
    {
        // Show a form to create a new rating.
        return view('ratings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|numeric',
            'package_id' => 'required|numeric',
            'rating' => 'required|numeric',
            'comment' => 'required'
        ]);
        
        $rating = Ratings::create([
            'user_id' => $request->user_id,
            'package_id' => $request->package_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Rating created successfully');
    }

    public function show(Rating $rating)
    {
        // Show details of a specific rating.
        return view('ratings.show', compact('rating'));
    }

    public function edit(Rating $rating)
    {
        // Show a form to edit an existing rating.
        return view('ratings.edit', compact('rating'));
    }

    public function update(Request $request, Rating $rating)
    {
        // Update an existing rating in the database.
        $rating->update($request->all());

        // Redirect to a success page or return a JSON response.
        return redirect()->route('ratings.index')->with('success', 'Rating updated successfully');
    }

    public function destroy(Rating $rating)
    {
        // Delete a rating from the database.
        $rating->delete();

        // Redirect to a success page or return a JSON response.
        return redirect()->route('ratings.index')->with('success', 'Rating deleted successfully');
    }
}
