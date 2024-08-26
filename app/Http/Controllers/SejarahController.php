<?php

namespace App\Http\Controllers;

use App\Models\SejarahModel;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index() {
        $sejarah = SejarahModel::first();
        return view('sejarah', compact('sejarah'));
    }
}
