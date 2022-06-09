<?php

namespace App\Http\Controllers;

use App\Models\RawatInap;
use Illuminate\Http\Request;

class RawatInapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rawat-inap');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'bb' => 'max:255',
            'tb' => 'max:255',
            'td' => 'max:255',
			'keluhan' => 'required|max:255',
			'diagnosis' => 'max:255',
			'obat' => 'max:255',
        ]);

        $validateData['id_user'] = auth()->user()->id;

        RawatInap::create($validateData);

        return redirect('/rawat-inap')->with('success', 'Pendaftaran rawat inap berhasil');
        // dd('berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RawatInap  $rawatInap
     * @return \Illuminate\Http\Response
     */
    public function show(RawatInap $rawatInap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RawatInap  $rawatInap
     * @return \Illuminate\Http\Response
     */
    public function edit(RawatInap $rawatInap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RawatInap  $rawatInap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RawatInap $rawatInap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RawatInap  $rawatInap
     * @return \Illuminate\Http\Response
     */
    public function destroy(RawatInap $rawatInap)
    {
        //
    }
}
