<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\TouristAttraction;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = TouristAttraction::paginate(6);
        return view('user.tour.index', compact('tours'));
    }

    public function show($id)
    {
        $tours = TouristAttraction::where('id', $id)->first();
        
        return view('user.tour.show', compact('tours'));
    }
}
