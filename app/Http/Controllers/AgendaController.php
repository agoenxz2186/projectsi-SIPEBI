<?php

namespace App\Http\Controllers;

use App\Models\AgendaModel;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index() {
        $agenda = AgendaModel::all();
        return view('agenda', compact('agenda'));
    }
}
