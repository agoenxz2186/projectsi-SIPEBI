<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisiMisiModel;

class VisiMisiAdminController extends Controller
{
    public function index()
    {
        $visimisi = VisiMisiModel::paginate(5);
        return view('admin.visimisi.index', compact('visimisi'));
    }

    public function create()
    {
        return view('admin.visimisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
        ]);
    
        $visimisi = new VisiMisiModel;
        $visimisi->visi = $request->visi;
        $visimisi->misi = $request->misi;
        $visimisi->save();
    
        return redirect()->route('visimisi.index')->with('success', 'Visi Misi Berhasil Ditambahkan!');
    }

    public function edit(VisiMisiModel $visimisi)
    {
        return view('admin.visimisi.edit', compact('visimisi'));
    }

    public function update(Request $request, VisiMisiModel $visimisi)
    {
        $request->validate([
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
        ]);
    
        $visimisi->visi = $request->visi;
        $visimisi->misi = $request->misi;
        $visimisi->save();
    
        return redirect()->route('visimisi.index')->with('success', 'Visi Misi Berhasil Diperbarui!');
    }

    public function destroy(VisiMisiModel $visimisi)
    {
        $visimisi->delete();
        return redirect()->route('visimisi.index')->with('success','Visi Misi Berhasil Dihapus!');
    }

}
