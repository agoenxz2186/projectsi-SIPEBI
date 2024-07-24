<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PendudukModel;

class AdminController extends Controller
{
    public function index() {
        $admin = PendudukModel::all();
        return view('admin.index', compact('admin'));
    }

    public function edit(PendudukModel $admin) {
        return view('admin.edit', compact('admin'));
    }
    
    public function update(Request $request, PendudukModel $admin) 
    {
        $validateData = $request->validate([
            'laki_laki' => 'required|integer',
            'perempuan' => 'required|integer',
            'balita' => 'required|integer'
        ], [
            'laki_laki.required' => 'Data laki-laki harus diisi',
            'laki_laki.integer' => 'Data laki-laki harus berupa angka',
            'perempuan.required' => 'Data perempuan harus diisi',
            'perempuan.integer' => 'Data perempuan harus berupa angka',
            'balita.required' => 'Data balita harus diisi',
            'balita.integer' => 'Data balita harus berupa angka',
        ]);
        
        $admin->update($validateData);
        return redirect()->route('admin.index')->with('success', 'Data Penduduk Berhasil Di Perbarui');
    }
}
