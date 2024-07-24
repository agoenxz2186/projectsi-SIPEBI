<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\GaleriModel;
use App\Models\LembagaModel;
use App\Models\StrukturOrganisasiModel;
use App\Models\BeritaModel;

class GlobalSearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $user = User::where('name', 'LIKE', "%{$query}%")
                     ->orWhere('email', 'LIKE', "%{$query}%")
                     ->get();
        $galeri = GaleriModel::where('judul', 'LIKE', "%{$query}%")
                    ->get();
        
        $berita = BeritaModel::where('judul', 'LIKE', "%{$query}%")
                    ->get();
        
        $lembaga = LembagaModel::where('nama', 'LIKE', "%{$query}%")
                    ->orWhere('keterangan', 'LIKE', "%{$query}%")
                    ->get();

        $struktur = StrukturOrganisasiModel::where('nama', 'LIKE', "%{$query}%")
                    ->orWhere('jabatan', 'LIKE', "%{$query}%")
                    ->get();

        // Tambahkan model lain yang ingin Anda cari

        return view('admin.globalsearch', compact('user', 'galeri', 'berita', 'lembaga','struktur'));
    }
}
