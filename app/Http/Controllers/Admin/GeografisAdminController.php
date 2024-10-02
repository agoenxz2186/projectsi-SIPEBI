<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeografisModel;

class GeografisAdminController extends Controller
{
    public function index(){
        $geografis = GeografisModel::paginate(5);
        return view('admin.geografis.index', compact('geografis'));
    }

    public function create(){
        return view('admin.geografis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'nullable|string',
            'nama' => 'nullable|string',
            'jumlah' => 'nullable|string',
        ]);
    
        $geografis = new GeografisModel();
        $geografis->keterangan = $request->keterangan;
        $geografis->nama = $request->nama;
        $geografis->jumlah = $request->jumlah;
        $geografis->save();
    
        return redirect()->route('geografis.index')->with('success', 'Geografis Berhasil Ditambahkan!');
    }

    public function edit(GeografisModel $geografis)
    {
        return view('admin.geografis.edit', compact('geografis'));
    }

    public function update(Request $request, GeografisModel $geografis)
    {
        $request->validate([
            'keterangan' => 'nullable|string',
            'nama' => 'nullable|string',
            'jumlah' => 'nullable|string',
        ]);
    
        $geografis->keterangan = $request->keterangan;
        $geografis->nama = $request->nama;
        $geografis->jumlah = $request->jumlah;
        $geografis->save();
    
        return redirect()->route('geografis.index')->with('success', 'Geografis Berhasil Diperbarui!');
    }

    public function destroy(GeografisModel $geografis)
    {
        $geografis->delete();
        return redirect()->route('geografis.index')->with('success','Geografis Berhasil Dihapus!');
    }

}
