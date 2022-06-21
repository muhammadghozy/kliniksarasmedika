<?php

namespace App\Http\Controllers;

use App\Models\RawatJalan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RawatJalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
            ->join('rawat_jalans', 'users.id', '=', 'rawat_jalans.id_user')
            ->select('users.nama', 'rawat_jalans.keluhan', 'rawat_jalans.diagnosis', 'rawat_jalans.tindakan', 'rawat_jalans.created_at')
            ->get();

        return view('rekam-medis-rawat-jalan',[
            'rawat_jalans' => RawatJalan::where('id_user', auth()->user()->id)->get(),
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
            ->join('rawat_jalans', 'users.id', '=', 'rawat_jalans.id_user')
            ->select('users.nama', 'rawat_jalans.keluhan')
            ->get();

        return view('rawat-jalan',[
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
			'tindakan' => 'max:255',
        ]);

        $validateData['id_user'] = auth()->user()->id;

        RawatJalan::create($validateData);

        return redirect('/rawat-jalan')->with('success', 'Pendaftaran rawat jalan berhasil');
        // dd('berhasil');
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
    public function edit()
    {
        $users = DB::table('users')
            ->join('rawat_jalans', 'users.id', '=', 'rawat_jalans.id_user')
            ->select('users.ttl', 'rawat_jalans.id', 'rawat_jalans.bb', 'rawat_jalans.tb', 'rawat_jalans.td', 'rawat_jalans.keluhan', 'rawat_jalans.diagnosis', 'rawat_jalans.tindakan')
            ->get();

        return view('edit-rawat-jalan',[
            'datas' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RawatJalan  $rawatJalan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        RawatJalan::updateOrCreate(
            ['id' => $id],
            ['bb' => $request->bb, 
                'tb'    => $request->tb,
                'td'     => $request->td,
                'diagnosis'    => $request->diagnosis,
                'tindakan'     => $request->tindakan,]
            );
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
