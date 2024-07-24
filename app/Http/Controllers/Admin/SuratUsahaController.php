<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuratUsahaModel;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Carbon\Carbon;


class SuratUsahaController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil data SKTM yang terkait dengan pengguna yang sedang login
   $user = auth()->user();
   $query = SuratUsahaModel::with('user');
   if ($user->role === 'admin') {
       // Jika pengguna adalah admin, tampilkan semua data SKTM
       $suratusaha = SuratUsahaModel::with('user')->paginate(5);
       
   }
   if ($request->has('search')) {
    $search = $request->input('search');
    $query->where(function($q) use ($search) {
        $q->where('nama', 'like', "%{$search}%")
            ->orWhere('tempat_lahir', 'like', "%{$search}%")
            ->orWhere('tanggal_lahir', 'like', "%{$search}%")
            ->orWhere('alamat', 'like', "%{$search}%")
            ->orWhere('jenis_usaha', 'like', "%{$search}%")
            ->orWhere('nik', 'like', "%{$search}%")
            ->orWhere('alamat_usaha', 'like', "%{$search}%");
    });
} 
   else {
       // Jika bukan admin, hanya tampilkan data SKTM yang dibuat oleh pengguna yang sedang login
       $suratusaha = SuratUsahaModel::with('user')->where('id_users', $user->id)->paginate(5);
   }
   $suratusaha = $query->paginate(5);
        return view('admin.suratusaha.index', compact('suratusaha'));
    }
    public function suratusaha()
    {
        return view('suratusaha.suratusaha');
    }
    public function view(Request $request)
    {
        $user = auth()->user();
        $query = SuratUsahaModel::with('user');
    
        if ($user->role === 'admin') {
            // Jika pengguna adalah admin, tampilkan semua data SKTM
            $suratusaha = $query->paginate(5);
        } else {
            // Jika bukan admin, hanya tampilkan data SKTM yang dibuat oleh pengguna yang sedang login
            $query->where('id_users', $user->id);
        }
    
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('tempat_lahir', 'like', "%{$search}%")
                    ->orWhere('tanggal_lahir', 'like', "%{$search}%")
                    ->orWhere('alamat', 'like', "%{$search}%")
                    ->orWhere('jenis_usaha', 'like', "%{$search}%")
                    ->orWhere('nik', 'like', "%{$search}%")
                    ->orWhere('alamat_usaha', 'like', "%{$search}%");
            });
        }
    
        $suratusaha = $query->paginate(5);
    
        return view('suratusaha.view', compact('suratusaha'));
    }
    
    public function create()
    {
        return view('admin.suratusaha.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'pekerjaan' => 'required',
            'nik' => 'required|integer',
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'jenis_usaha' => 'required',
            'mulai_usaha' => 'required',
            'status_usaha' => 'required',
            'ukuran' => 'required|numeric',
            'alamat_usaha' => 'required',
            'alasan' => 'required',
        
        ],[
            'nik.integer' => 'NIK harus berisi angka',
            'ukuran.numeric' => 'Ukuran harus berisi angka',
            'rt.integer' => 'rt harus berisi angka',
            'rw.integer' => 'rw harus berisi angka',
        ]);
       
        try {
            $validatedData['id_users'] = auth()->user()->id;
        
            // Assuming you have a 'role' field in your user model
            $userRole = auth()->user()->role;
        
            // Redirect based on user role
            if ($userRole === 'warga') {
                SuratUsahaModel::create($validatedData);
                return redirect()->route('suratusaha.view')->with('success', 'Surat Usaha Berhasil Ditambahkan!');
            } elseif ($userRole === 'admin') {
                SuratUsahaModel::create($validatedData);
                return redirect()->route('suratusaha.index')->with('success', 'Surat Usaha Berhasil Ditambahkan!');
            } else {
                // Handle other roles if needed
                // For example, redirect them to a default route
                return redirect()->route('default.route')->with('error', 'Peran pengguna tidak valid');
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    public function edit(SuratUsahaModel $suratusaha)
    {
        return view('admin.suratusaha.edit', compact('suratusaha'));
    }

    public function update(Request $request, SuratUsahaModel $suratusaha)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'pekerjaan' => 'required',
            'nik' => 'required|integer',
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'jenis_usaha' => 'required',
            'mulai_usaha' => 'required',
            'status_usaha' => 'required',
            'ukuran' => 'required|numeric',
            'alamat_usaha' => 'required',
            'alasan' => 'required',
        
        ],[
            'nik.integer' => 'NIK harus berisi angka',
            'ukuran.numeric' => 'Ukuran harus berisi angka',
            'rt.integer' => 'rt harus berisi angka',
            'rw.integer' => 'rw harus berisi angka',
        ]);
       
    
      
    
        $suratusaha->update($validatedData);
        return redirect()->route('suratusaha.index')->with('success', 'Surat Usaha Berhasil Diperbarui!');
    }
    

    public function destroy(SuratUsahaModel $suratusaha)
    {
        $suratusaha->delete();
        return redirect()->route('suratusaha.index')->with('success', 'Surat Usaha Berhasil Dihapus!');
    }
    public function downloadPDF($id)
{
    $suratusaha = SuratUsahaModel::find($id);

    // Render view blade ke dalam HTML
    $html = view('suratusaha.suratusaha_download', compact('suratusaha'))->render();

    // Konfigurasi Dompdf
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isRemoteEnabled', true);

    // Membuat objek Dompdf
    $dompdf = new Dompdf($options);

    // Memuat HTML ke Dompdf
    $dompdf->loadHtml($html);

    // (Opsional) Membuat ukuran dan orientasi kertas
    $dompdf->setPaper('A4', 'portrait');

    // Render PDF
    $dompdf->render();

    // Menyimpan atau mengirim PDF ke browser
    return $dompdf->stream("Surat_Usaha.pdf");
}
}
