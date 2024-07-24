<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAdminController extends Controller
{
    public function index()
    {
        $user = User::paginate(5);
        return view('admin.user.index', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required|string',
        ]);
    
        // Jika password tidak kosong, hash dan masukkan ke dalam $validatedData
        if (!empty($request->password)) {
            $validatedData['password'] = Hash::make($request->password);
        } else {
            // Jika password kosong, jangan sertakan dalam $validatedData
            unset($validatedData['password']);
        }
    
        $user->update($validatedData);
    
        return redirect()->route('user.index')->with('success', 'User Berhasil Diperbarui!');
    }
    
    
    

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'user Berhasil Dihapus!');
    }
}
