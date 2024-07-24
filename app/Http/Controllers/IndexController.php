<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendudukModel;
use App\Models\BeritaModel;

class IndexController extends Controller
{
    public function index() {
        $admin = PendudukModel::all();
        $berita = BeritaModel::latest()->limit(3)->get();
        return view('index', compact('admin', 'berita'));
    }
}
