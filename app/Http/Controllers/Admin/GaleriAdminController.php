<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GaleriModel;
use Illuminate\Http\Request;

class GaleriAdminController extends Controller
{
    public function index()
    {
        $galeri = GaleriModel::paginate(5);
        return view('admin.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi foto
        
        ]);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName(); // atau sesuai format yang Anda inginkan
            $file->storeAs('public/galeri', $fileName); // Ganti dengan path dan nama direktori yang sesuai
            $validatedData['foto'] = $fileName;
        }

        
     

        GaleriModel::create($validatedData);
        return redirect()->route('galeri.index')->with('success', 'galeri Berhasil Ditambahkan!');
    }

    public function edit(GaleriModel $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, GaleriModel $galeri)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Jadikan foto opsional
        ]);
    
        // Menghapus validasi yang memaksa foto harus diunggah setiap kali
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName(); // atau sesuai format yang Anda inginkan
            $file->storeAs('public/galeri', $fileName); // Ganti dengan path dan nama direktori yang sesuai
            $validatedData['foto'] = $fileName;
        } else {
            unset($validatedData['foto']); // Jika tidak ada file foto yang diunggah, hapus key 'foto' dari data yang divalidasi
        }
    
        $galeri->update($validatedData);
        return redirect()->route('galeri.index')->with('success', 'galeri Berhasil Diperbarui!');
    }
    

    public function destroy(GaleriModel $galeri)
    {
        if ($galeri->foto) {
            $fotoPath = storage_path('app/public/galeri/' . $galeri->foto);
            if (file_exists($fotoPath)) {
                unlink($fotoPath);
            }
        }
        $galeri->delete();
        return redirect()->route('galeri.index')->with('success', 'galeri Berhasil Dihapus!');
    }
}
