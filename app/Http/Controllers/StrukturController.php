<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasiModel;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    public function index() {
        $struktur = StrukturOrganisasiModel::all();
        return view('struktur', compact('struktur'));
    }
}
