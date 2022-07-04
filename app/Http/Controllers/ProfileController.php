<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit(){
        return view('user-profile');
    }

    public function update(Request $request, $id)
    {

        User::updateOrCreate(
        ['id' => $id],
        ['nama' => $request->nama,
        'nik' => $request->nik,
        'ttl' => $request->ttl,
        'telp' => $request->telp,
            'alamat' => $request->alamat,]
    );

        return redirect('/user-profile')->with('success', 'Berhasil diperbarui');
        // dd('berhasil');
    }
}