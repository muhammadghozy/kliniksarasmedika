<?php

namespace App\Http\Controllers;

use App\Models\Jalan;
use Illuminate\Http\Request;

class JalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rawat-jalan');
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
        $validateData = $request->validate([
            'ttl' => 'max:255',
            'bb' => 'max:255',
            'tb' => 'max:255',
            'td' => 'max:255',
            'keluhan' => 'requaired|max:255',
        ])
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jalan  $jalan
     * @return \Illuminate\Http\Response
     */
    public function show(Jalan $jalan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jalan  $jalan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jalan $jalan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jalan  $jalan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jalan $jalan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jalan  $jalan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jalan $jalan)
    {
        //
    }
}
