<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AgendaModel;

class AgendaAdminController extends Controller
{
    public function index()
    {
        $agenda = AgendaModel::all();
        return view('admin.agenda.index', compact('agenda'));
    }

    public function create()
    {
        return view('admin.agenda.create');
    }

    public function store(Request $request)
    {
        $agenda = new AgendaModel();
        $agenda->kegiatan = $request->input('kegiatan');
        $agenda->keterangan = $request->input('keterangan');
        $agenda->tanggal = $request->input('tanggal');
        $agenda->save();

        return redirect()->route('agenda.index')->with('success', 'Event berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $agenda = AgendaModel::findOrFail($id);
        $agenda->delete();

        return redirect()->route('agenda.index')->with('success', 'Event berhasil dihapus!');
    }
}
