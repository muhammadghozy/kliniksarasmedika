<?php

namespace App\Http\Controllers;

use App\Models\RawatJalan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RawatJalanController extends Controller
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
        return view('rawat-jalan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        // $lengkap = User::where('id_user',$user->id)->get()->first();
        $validateData = $request->validate([
            // 'id_user' => $user->id,
            // 'ttl' => 'max:255',
            'bb' => 'max:255',
            'tb' => 'max:255',
            'td' => 'max:255',
			'keluhan' => 'max:255',
			'diagnosis' => 'max:255',
			'tindakan' => 'max:255',
        ]);

        RawatJalan::create($validateData);

        dd('berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RawatJalan  $rawatJalan
     * @return \Illuminate\Http\Response
     */
    public function show(RawatJalan $rawatJalan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RawatJalan  $rawatJalan
     * @return \Illuminate\Http\Response
     */
    public function edit(RawatJalan $rawatJalan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RawatJalan  $rawatJalan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RawatJalan $rawatJalan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RawatJalan  $rawatJalan
     * @return \Illuminate\Http\Response
     */
    public function destroy(RawatJalan $rawatJalan)
    {
        //
    }
}
