<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StrukturFotoModel;

class StrukturFotoController extends Controller
{
    public function index()
    {
        $struktur_foto = StrukturFotoModel::paginate(5);
        return view('admin.struktur_foto.index', compact('struktur_foto'));
    }

    public function create()
    {
        return view('admin.struktur_foto.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'struktur_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi struktur_foto
        
        ]);
        if ($request->hasFile('struktur_foto')) {
            $file = $request->file('struktur_foto');
            $fileName = $file->getClientOriginalName(); // atau sesuai format yang Anda inginkan
            $file->storeAs('public/struktur_foto', $fileName); // Ganti dengan path dan nama direktori yang sesuai
            $validatedData['struktur_foto'] = $fileName;
        }

        
     

        StrukturFotoModel::create($validatedData);
        return redirect()->route('struktur_foto.index')->with('success', 'struktur_foto Berhasil Ditambahkan!');
    }

    public function edit(StrukturFotoModel $struktur_foto)
    {
        return view('admin.struktur_foto.edit', compact('struktur_foto'));
    }

    public function update(Request $request, StrukturFotoModel $struktur_foto)
    {
        $validatedData = $request->validate([
            'struktur_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Jadikan struktur_foto opsional
        ]);
    
        // Menghapus validasi yang memaksa struktur_foto harus diunggah setiap kali
        if ($request->hasFile('struktur_foto')) {
            $file = $request->file('struktur_foto');
            $fileName = $file->getClientOriginalName(); // atau sesuai format yang Anda inginkan
            $file->storeAs('public/struktur_foto', $fileName); // Ganti dengan path dan nama direktori yang sesuai
            $validatedData['struktur_foto'] = $fileName;
        } else {
            unset($validatedData['struktur_foto']); // Jika tidak ada file struktur_foto yang diunggah, hapus key 'struktur_foto' dari data yang divalidasi
        }
    
        $struktur_foto->update($validatedData);
        return redirect()->route('struktur_foto.index')->with('success', 'struktur_foto Berhasil Diperbarui!');
    }
    

    public function destroy(StrukturFotoModel $struktur_foto)
    {
        if ($struktur_foto->struktur_foto) {
            $fotoPath = storage_path('app/public/struktur_foto/' . $struktur_foto->struktur_foto);
            if (file_exists($fotoPath)) {
                unlink($fotoPath);
            }
        }
        $struktur_foto->delete();
        return redirect()->route('struktur_foto.index')->with('success', 'struktur_foto Berhasil Dihapus!');
    }
}
