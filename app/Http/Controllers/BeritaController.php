<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeritaModel;
use Carbon\Carbon;

class BeritaController extends Controller
{
    public function index(Request $request) {
        // Mengambil query pencarian dari request
        $search = $request->input('search');

        // Membuat query dasar
        $query = BeritaModel::with('user');

        // Jika ada query pencarian, tambahkan kondisi pencarian
        if ($search) {
            $query->where('judul', 'LIKE', "%{$search}%")
                  ->orWhere('isi', 'LIKE', "%{$search}%");
        }

        // Paginate hasil query
        $berita = $query->paginate(3);

        // Mengambil 5 berita terbaru
        $recentPosts = BeritaModel::orderBy('created_at', 'desc')->take(5)->get();

        // Mengembalikan view dengan data berita dan recent posts
        return view('berita', compact('berita', 'recentPosts', 'search'));
    }

    public function show(Request $request, $id) {
        // Mengambil query pencarian dari request
        $search = $request->input('search');

        // Jika ada query pencarian, redirect ke halaman index dengan query
        if ($search) {
            return redirect()->route('berita.index', ['search' => $search]);
        }

        $berita = BeritaModel::findOrFail($id);

        // Mengambil 5 berita terbaru
        $recentPosts = BeritaModel::orderBy('created_at', 'desc')->take(5)->get();

        return view('berita_detail', compact('berita', 'recentPosts'));
    }
}
