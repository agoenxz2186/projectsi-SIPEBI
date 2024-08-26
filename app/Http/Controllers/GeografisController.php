<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeografisModel;

class GeografisController extends Controller
{
    public function index() {
        $geografis = GeografisModel::all(); // Fetch all records
        $firstGeografis = $geografis->first(); // Get the first record
        $remainingGeografis = $geografis->slice(1); // Get all records except the first one
        return view('geografis', compact('firstGeografis', 'remainingGeografis'));
    }
}
