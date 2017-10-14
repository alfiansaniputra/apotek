<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = Pasien::all();
         return view('pasien.index',['pasien' => $pasien]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'id_kode_psn' => 'required',
        'nama_psn' => 'required',
        'alamat_psn' => 'required',
        'gender_psn' => 'required',
        'umur_psn' => 'required',
        'telepon_psn' => 'required',
        ]);
        $pasien = new Pasien;
        $pasien->id_kode_psn = $request->id_kode_psn;
        $pasien->nama_psn = $request->nama_psn;
        $pasien->alamat_psn = $request->alamat_psn;
        $pasien->gender_psn = $request->gender_psn;
        $pasien->umur_psn = $request->umur_psn;
        $pasien->telepon_psn = $request->telepon_psn;
        $pasien->save();
        return redirect('pasien');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.edit')->with('pasien', $pasien);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'id_kode_psn' => 'required',
        'nama_psn' => 'required',
        'alamat_psn' => 'required',
        'gender_psn' => 'required',
        'umur_psn' => 'required',
        'telepon_psn' => 'required',
        ]);
        $pasien = Pasien::find($id);
        $pasien->id_kode_psn = $request->id_kode_psn;
        $pasien->nama_psn = $request->nama_psn;
        $pasien->alamat_psn = $request->alamat_psn;
        $pasien->gender_psn = $request->gender_psn;
        $pasien->umur_psn = $request->umur_psn;
        $pasien->telepon_psn = $request->telepon_psn;
        $pasien->save();
        return redirect('pasien');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien ->delete();
        return redirect('pasien');
    }
}
