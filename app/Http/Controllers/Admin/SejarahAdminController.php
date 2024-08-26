<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SejarahModel;

class SejarahAdminController extends Controller
{
    public function index()
    {
        $sejarah = SejarahModel::paginate(5);
        return view('admin.sejarah.index', compact('sejarah'));
    }
    public function create()
    {
        return view('admin.sejarah.create');
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
            $file->storeAs('public/sejarah', $fileName); // Ganti dengan path dan nama direktori yang sesuai
            $validatedData['foto'] = $fileName;
        }

        
     

        SejarahModel::create($validatedData);
        return redirect()->route('sejarah.index')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function edit(SejarahModel $sejarah)
    {
        return view('admin.sejarah.edit', compact('sejarah'));
    }

    public function update(Request $request, SejarahModel $sejarah)
    {
        $validatedData = $request->validate([
            'deskripsi' => 'nullable',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Jadikan foto opsional
        ]);
    
        // Menghapus validasi yang memaksa foto harus diunggah setiap kali
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName(); // atau sesuai format yang Anda inginkan
            $file->storeAs('public/sejarah', $fileName); // Ganti dengan path dan nama direktori yang sesuai
            $validatedData['foto'] = $fileName;
        } else {
            unset($validatedData['foto']); // Jika tidak ada file foto yang diunggah, hapus key 'foto' dari data yang divalidasi
        }
    
        $sejarah->update($validatedData);
        return redirect()->route('sejarah.index')->with('success', 'Data Berhasil Diperbarui!');
    }
    

    public function destroy(SejarahModel $sejarah)
    {
        if ($sejarah->foto) {
            $fotoPath = storage_path('app/public/sejarah/' . $sejarah->foto);
            if (file_exists($fotoPath)) {
                unlink($fotoPath);
            }
        }
        $sejarah->delete();
        return redirect()->route('sejarah.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
