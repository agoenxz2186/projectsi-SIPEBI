<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LembagaModel;

class LembagaAdminController extends Controller
{
    public function index()
    {
        $lembaga = LembagaModel::paginate(5);
        return view('admin.lembaga.index', compact('lembaga'));
    }

    public function create()
    {
        return view('admin.lembaga.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi foto
        
        ]);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName(); // atau sesuai format yang Anda inginkan
            $file->storeAs('public/lembaga', $fileName); // Ganti dengan path dan nama direktori yang sesuai
            $validatedData['foto'] = $fileName;
        }

        
     

        LembagaModel::create($validatedData);
        return redirect()->route('lembaga.index')->with('success', 'lembaga Berhasil Ditambahkan!');
    }

    public function edit(LembagaModel $lembaga)
    {
        return view('admin.lembaga.edit', compact('lembaga'));
    }

    public function update(Request $request, LembagaModel $lembaga)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Jadikan foto opsional
        ]);
    
        // Menghapus validasi yang memaksa foto harus diunggah setiap kali
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName(); // atau sesuai format yang Anda inginkan
            $file->storeAs('public/lembaga', $fileName); // Ganti dengan path dan nama direktori yang sesuai
            $validatedData['foto'] = $fileName;
        } else {
            unset($validatedData['foto']); // Jika tidak ada file foto yang diunggah, hapus key 'foto' dari data yang divalidasi
        }
    
        $lembaga->update($validatedData);
        return redirect()->route('lembaga.index')->with('success', 'lembaga Berhasil Diperbarui!');
    }
    

    public function destroy(LembagaModel $lembaga)
    {
        if ($lembaga->foto) {
            $fotoPath = storage_path('app/public/lembaga/' . $lembaga->foto);
            if (file_exists($fotoPath)) {
                unlink($fotoPath);
            }
        }
        $lembaga->delete();
        return redirect()->route('lembaga.index')->with('success', 'lembaga Berhasil Dihapus!');
    }
}
