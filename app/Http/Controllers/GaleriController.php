<?php

namespace App\Http\Controllers;

use App\Models\GaleriModel;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index() {
        $galeri = GaleriModel::paginate(9);
        return view('galeri', compact('galeri'));
        
    }
}
