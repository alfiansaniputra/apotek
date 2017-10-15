<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resep;
class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resep = Resep::all();
         return view('resep.index',['resep' => $resep]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resep.create');
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
        'id_nomorresep' => 'required',
        'tanggal_resep' => 'required',
        'kode_dkt_id' => 'required',
        'kode_psn_id' => 'required',
        'kode_plk_id' => 'required',
        'total_harga' => 'required',
        'bayar' => 'required',
        'kembali' => 'required',
        ]);
        $resep = new Resep;
        $resep->id_nomorresep = $request->id_nomorresep;
        $resep->tanggal_resep = $request->tanggal_resep;
        $resep->kode_dkt_id = $request->kode_dkt_id;
        $resep->kode_psn_id = $request->kode_psn_id;
        $resep->kode_plk_id = $request->kode_plk_id;
        $resep->total_harga = $request->total_harga;
        $resep->bayar = $request->bayar;
        $resep->kembali = $request->kembali;
        $resep->save();
        return redirect('/apotik/resep');

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
        $resep = Resep::find($id);
        return view('resep.edit')->with('resep', $resep);

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
        'id_nomorresep' => 'required',
        'tanggal_resep' => 'required',
        'kode_dkt_id' => 'required',
        'kode_psn_id' => 'required',
        'kode_plk_id' => 'required',
        'total_harga' => 'required',
        'bayar' => 'required',
        'kembali' => 'required',
        ]);
        $resep = Resep::find($id);
        $resep->id_nomorresep = $request->id_nomorresep;
        $resep->tanggal_resep = $request->tanggal_resep;
        $resep->kode_dkt_id = $request->kode_dkt_id;
        $resep->kode_psn_id = $request->kode_psn_id;
        $resep->kode_plk_id = $request->kode_plk_id;
        $resep->total_harga = $request->total_harga;
        $resep->bayar = $request->bayar;
        $resep->kembali = $request->kembali;
        $resep->save();
        return redirect('/apotik/resep');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resep = Resep::find($id);
        $resep ->delete();
        return redirect('/apotik/resep');
    }
}
