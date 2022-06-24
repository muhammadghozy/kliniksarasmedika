<?php

namespace App\Http\Controllers;

use App\Models\RawatInap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RawatInapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
            ->join('rawat_inaps', 'users.id', '=', 'rawat_inaps.id_user')
            ->select('users.nama', 'rawat_inaps.keluhan', 'rawat_inaps.diagnosis', 'rawat_inaps.obat', 'rawat_inaps.created_at')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('rekam-medis-rawat-inap',[
            'rawat_inaps' => RawatInap::where('id_user', auth()->user()->id)->get(),
            'datas' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = DB::table('users')
            ->join('rawat_inaps', 'users.id', '=', 'rawat_inaps.id_user')
            ->select('users.nama', 'rawat_inaps.id', 'rawat_inaps.keluhan', 'rawat_inaps.created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('rawat-inap',[
            'datas' => $users
        ]);
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
    public function edit($id)
    {
        $users = DB::table('users')
            ->join('rawat_inaps', 'users.id', '=', 'rawat_inaps.id_user')
            ->select('users.ttl', 'rawat_inaps.id', 'rawat_inaps.bb', 'rawat_inaps.tb', 'rawat_inaps.td', 'rawat_inaps.keluhan', 'rawat_inaps.diagnosis', 'rawat_inaps.obat')
            ->where('rawat_inaps.id', $id)
            ->get();

        return view('edit-rawat-inap',[
            'datas' => $users[0]
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RawatInap  $rawatInap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        RawatInap::updateOrCreate(
            ['id' => $id],
            ['bb' => $request->bb, 
                'tb'    => $request->tb,
                'td'     => $request->td,
                'diagnosis'    => $request->diagnosis,
                'obat'     => $request->obat,]
            );

            return redirect('/rawat-inap')->with('success', 'Update rawat inap berhasil');
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
