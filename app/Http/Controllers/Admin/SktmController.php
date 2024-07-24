<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SktmModel;
use Dompdf\Dompdf;
use Dompdf\Options;
use Carbon\Carbon;


class SktmController extends Controller
{
    public function index(Request $request)
    {
         // Mengambil data SKTM yang terkait dengan pengguna yang sedang login
    $user = auth()->user();
    $query = SktmModel::with('user');

    if ($user->role === 'admin') {
        // Jika pengguna adalah admin, tampilkan semua data SKTM
        $sktm = SktmModel::with('user')->paginate(5);
    }
    if ($request->has('search')) {
        $search = $request->input('search');
        $query->where(function($q) use ($search) {
            $q->where('nama', 'like', "%{$search}%")
                ->orWhere('tempat_lahir', 'like', "%{$search}%")
                ->orWhere('tanggal_lahir', 'like', "%{$search}%")
                ->orWhere('alamat', 'like', "%{$search}%")
                ->orWhere('nomor_kk', 'like', "%{$search}%")
                ->orWhere('nik', 'like', "%{$search}%");
        });
     } else {
        // Jika bukan admin, hanya tampilkan data SKTM yang dibuat oleh pengguna yang sedang login
        $sktm = SktmModel::with('user')->where('id_users', $user->id)->paginate(5);
    }
    $sktm = $query->paginate(5);
    return view('admin.sktm.index', compact('sktm'));
    }

    public function surat()
    {
        return view('sktm.sktm');
    }
    public function view(Request $request)
    {
        $user = auth()->user();
        $query = SktmModel::with('user');

        if ($user->role === 'admin') {
            // Jika pengguna adalah admin, tampilkan semua data SKTM
            $sktm = SktmModel::with('user')->paginate(5);
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
                    ->orWhere('nomor_kk', 'like', "%{$search}%")
                    ->orWhere('nik', 'like', "%{$search}%");
            });
         }
         $sktm = $query->paginate(5);

        return view('sktm.sktm_view', compact('sktm'));
    }
    public function create()
    {
        return view('admin.sktm.create');
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
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'nik' => 'required|integer',
            'nomor_kk' => 'required|integer',
            'alasan' => 'required',
        ], [
            'nik.integer' => 'NIK harus berisi angka',
            'nomor_kk.integer' => 'Nomor KK harus berisi angka',
            'rt.integer' => 'rt harus berisi angka',
            'rw.integer' => 'rw harus berisi angka',
        ]);
    
        try {
            $validatedData['id_users'] = auth()->user()->id;
        
            // Assuming you have a 'role' field in your user model
            $userRole = auth()->user()->role;
        
            // Redirect based on user role
            if ($userRole === 'warga') {
                SktmModel::create($validatedData);
                return redirect()->route('sktm.view')->with('success', 'SKTM Berhasil Ditambahkan!');
            } elseif ($userRole === 'admin') {
                SktmModel::create($validatedData);
                return redirect()->route('sktm.index')->with('success', 'SKTM Berhasil Ditambahkan!');
            } else {
                // Handle other roles if needed
                // For example, redirect them to a default route
                return redirect()->route('sktm.index')->with('error', 'Peran pengguna tidak valid');
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
        
    }
    

    public function edit(SktmModel $sktm)
    {
        return view('admin.sktm.edit', compact('sktm'));
    }

    public function update(Request $request, SktmModel $sktm)
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
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'nik' => 'required|integer',
            'nomor_kk' => 'required|integer',
            'alasan' => 'required',
        ], [
            'nik.integer' => 'NIK harus berisi angka',
            'nomor_kk.integer' => 'Nomor KK harus berisi angka',
            'rt.integer' => 'rt harus berisi angka',
            'rw.integer' => 'rw harus berisi angka',
        ]);
    
        $sktm->update($validatedData);
        return redirect()->route('sktm.index')->with('success', 'SKTM Berhasil Diperbarui!');
    }
    

    public function destroy(SktmModel $sktm)
    {
        $sktm->delete();
        return redirect()->route('sktm.index')->with('success', 'SKTM Berhasil Dihapus!');
    }

    public function downloadPDF($id)
    {
        $sktm = SktmModel::find($id);
    
        // Render view blade ke dalam HTML
        $html = view('sktm.sktm_pdf', compact('sktm'))->render();
    
        // Konfigurasi Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->set('isPhpEnabled', true); // Pastikan PHP diaktifkan
        $options->set('tempDir', '/tmp'); // Tentukan direktori sementara jika diperlukan
    
        // Membuat objek Dompdf
        $dompdf = new Dompdf($options);
    
        // Memuat HTML ke Dompdf
        $dompdf->loadHtml($html);
    
        // (Opsional) Membuat ukuran dan orientasi kertas
        $dompdf->setPaper('A4', 'portrait');
    
        // Set maximum execution time
        set_time_limit(300); // Ubah batas waktu menjadi 5 menit (300 detik)
    
        // Render PDF
        $dompdf->render();
    
        // Menyimpan atau mengirim PDF ke browser
        return $dompdf->stream("Surat_Keterangan_Tidak_Mampu.pdf");
    }
    
    
}
