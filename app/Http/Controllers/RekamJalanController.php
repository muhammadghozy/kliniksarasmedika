<?php

namespace App\Http\Controllers;

use App\Models\RekamJalan;
use App\Models\RawatJalan;
use Illuminate\Http\Request;

class RekamJalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rekam-medis-rawat-jalan',[
            'rawat_jalans' => RawatJalan::where('id_user', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RekamJalan  $rekamJalan
     * @return \Illuminate\Http\Response
     */
    public function show(RekamJalan $rekamJalan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RekamJalan  $rekamJalan
     * @return \Illuminate\Http\Response
     */
    public function edit(RekamJalan $rekamJalan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RekamJalan  $rekamJalan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RekamJalan $rekamJalan)
    {
        // RawatJalan::updateOrCreate(
        //     ['id' => $id],
        //     ['nama' => $request->nama, 
        //         'nik'    => $request->nik,
        //         'ttl'     => $request->ttl,
        //         'telp'    => $request->telp,
        //         'alamat'     => $request->alamat,]
        // );
    
        //     return redirect('/user-profile')->with('success', 'Berhasil diperbarui');
        //     dd('berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RekamJalan  $rekamJalan
     * @return \Illuminate\Http\Response
     */
    public function destroy(RekamJalan $rekamJalan)
    {
        //
    }
}
