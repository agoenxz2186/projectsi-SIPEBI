<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TentangModel;

class TentangController extends Controller
{
    public function index()
    {
        $tentang = TentangModel::paginate(5);
        return view('admin.tentang.index', compact('tentang'));
    }
    public function create()
    {
        return view('admin.tentang.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'deskripsi' => 'nullable',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi foto
        
        ]);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName(); // atau sesuai format yang Anda inginkan
            $file->storeAs('public/tentang', $fileName); // Ganti dengan path dan nama direktori yang sesuai
            $validatedData['foto'] = $fileName;
        }

        
     

        TentangModel::create($validatedData);
        return redirect()->route('tentang.index')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function edit(TentangModel $tentang)
    {
        return view('admin.tentang.edit', compact('tentang'));
    }

    public function update(Request $request, TentangModel $tentang)
    {
        $validatedData = $request->validate([
            'deskripsi' => 'nullable',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Jadikan foto opsional
        ]);
    
        // Menghapus validasi yang memaksa foto harus diunggah setiap kali
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName(); // atau sesuai format yang Anda inginkan
            $file->storeAs('public/tentang', $fileName); // Ganti dengan path dan nama direktori yang sesuai
            $validatedData['foto'] = $fileName;
        } else {
            unset($validatedData['foto']); // Jika tidak ada file foto yang diunggah, hapus key 'foto' dari data yang divalidasi
        }
    
        $tentang->update($validatedData);
        return redirect()->route('tentang.index')->with('success', 'Data Berhasil Diperbarui!');
    }
    

    public function destroy(TentangModel $tentang)
    {
        if ($tentang->foto) {
            $fotoPath = storage_path('app/public/tentang/' . $tentang->foto);
            if (file_exists($fotoPath)) {
                unlink($fotoPath);
            }
        }
        $tentang->delete();
        return redirect()->route('tentang.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
