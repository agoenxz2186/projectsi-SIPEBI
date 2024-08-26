<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasiModel;
use Illuminate\Http\Request;
use App\Models\StrukturFotoModel;

class StrukturController extends Controller
{
    public function index() {
        $struktur = StrukturOrganisasiModel::all();
        $struktur_foto = StrukturFotoModel::first();
        return view('struktur', compact('struktur','struktur_foto'));
    }
}
