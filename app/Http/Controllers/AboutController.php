<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TentangModel;

class AboutController extends Controller
{
    public function index() {
        $tentang = TentangModel::first();
        return view('about', compact('tentang'));
    }
}
