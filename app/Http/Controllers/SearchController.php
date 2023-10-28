<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class SearchController extends Controller
{
   public function search(Request $request)
{
      $query = trim(strtolower($request->input('query')));

    // Perform a database query based on the user's input
    $results = Packages::whereRaw("LOWER(TRIM(package_name)) LIKE ?", ["%$query%"])->get();
      $results = $results->map(function ($result) {
        $result->image_url = asset('images/package_images/' . $result->image_path);
          $result->truncated_description = substr($result->description, 0, 300) . '...';
        return $result;
    });
    return response()->json($results);
}
}