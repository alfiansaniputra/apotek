<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = Detail::all();
         return view('detail.index',['detail' => $detail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detail.create');
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
        'nomorresep_id' => 'required',
        'kode_obat_id' => 'required',
        'harga' => 'required',
        'dosis' => 'required',
        'subtotal' => 'required',
        ]);
        $detail = new Detail;
        $detail->nomorresep_id = $request->nomorresep_id;
        $detail->kode_obat_id = $request->kode_obat_id;
        $detail->harga = $request->harga;
        $detail->dosis = $request->dosis;
        $detail->subtotal = $request->subtotal;
        $detail->save();
        return redirect('/apotik/detail');

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
        $detail = Detail::find($id);
        return view('detail.edit')->with('detail', $detail);

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
        'nomorresep_id' => 'required',
        'kode_obat_id' => 'required',
        'harga' => 'required',
        'dosis' => 'required',
        'subtotal' => 'required',
        ]);
        $detail = Detail::find($id);
        $detail->nomorresep_id = $request->nomorresep_id;
        $detail->kode_obat_id = $request->kode_obat_id;
        $detail->harga = $request->harga;
        $detail->dosis = $request->dosis;
        $detail->subtotal = $request->subtotal;
        $detail->save();
        return redirect('/apotik/detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = Detail::find($id);
        $detail ->delete();
        return redirect('/apotik/detail');
    }
}
