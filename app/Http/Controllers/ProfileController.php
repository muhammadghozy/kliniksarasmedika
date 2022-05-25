<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(){
        return view('user-profile');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'max:255',
            'nik' => 'max:18|unique:users',
            'ttl' => 'required|max:255',
            'email' => 'email:dns|max:255|unique:users',
			'alamat' => 'max:255',
			'telp' => 'max:14',
        ]);

        User::create($validateData);

		return redirect('/user-profile')->with('success', 'Berhasil diperbarui');
    }
}