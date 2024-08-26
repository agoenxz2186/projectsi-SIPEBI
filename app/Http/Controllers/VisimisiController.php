<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisiModel;

class VisimisiController extends Controller
{
    public function index() {
        $visimisi = VisiMisiModel::all(); // Fetch all records
        $firstVisi = $visimisi->first(); // Get the first record
        $remainingVisiMisi = $visimisi->slice(1); // Get all records except the first one
        return view('visimisi', compact('firstVisi', 'remainingVisiMisi'));
    }
}
