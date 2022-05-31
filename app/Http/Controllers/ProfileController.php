<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(){
        return view('user-profile');
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'max:255',
            'nik' => 'max:18|unique:users',
            'ttl' => 'required|max:255',
			'alamat' => 'required|max:255',
			'telp' => 'required|max:14',
        ]);

        auth()->user()->update([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'ttl' => $request->ttl,
			'alamat' => $request->alamat,
			'telp' => $request->telp,
        ]);

		return redirect('/user-profile')->with('success', 'Berhasil diperbarui');
    }
}