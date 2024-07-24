<?php

namespace App\Http\Controllers;

use App\Models\LembagaModel;
use Illuminate\Http\Request;

class LembagaController extends Controller
{
    public function index() {
        $lembaga = LembagaModel::all();
        return view('lembaga', compact('lembaga'));
    }
}
