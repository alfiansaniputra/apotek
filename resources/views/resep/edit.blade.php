@extends('template.template')
@section('content')
<div class="col-md-10 col-md-offset-1" style="padding: 0px 80px;">
    <form class="form-horizontal" action="/apotik/resep/{{$resep->id}}" method="post">
                <div class="form-group">
                  <label  class="col-sm-2 control-label">No Resep</label>
                  <div class="col-sm-10">
                    <input value="{{$resep->id_nomorresep}}" name="id_nomorresep" type="text" class="form-control"  placeholder="No Resep">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Tanggal Resep</label>
                  <div class="col-sm-10">
                    <input value="{{$resep->tanggal_resep}}" name="tanggal_resep" type="date" class="form-control"  placeholder="Tanggal Resep">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Kode Dokter</label>
                  <div class="col-sm-10">
                    <input value="{{$resep->kode_dkt_id}}" name="kode_dkt_id" type="text" class="form-control"  placeholder="Kode Dokter">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">kode Pasien</label>
                  <div class="col-sm-10">
                    <input value="{{$resep->kode_psn_id}}" name="kode_psn_id" type="text" class="form-control"  placeholder="kode Pasien">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Kode Poliklinik</label>
                  <div class="col-sm-10">
                    <input value="{{$resep->kode_plk_id}}" name="kode_plk_id" type="text" class="form-control"  placeholder="Kode Poliklinik">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Total Harga</label>
                  <div class="col-sm-10">
                    <input value="{{$resep->total_harga}}" name="total_harga" type="text" class="form-control"  placeholder="Total Harga">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Bayar</label>
                  <div class="col-sm-10">
                    <input value="{{$resep->bayar}}" name="bayar" type="text" class="form-control"  placeholder="Bayar">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">kembali</label>
                  <div class="col-sm-10">
                    <input value="{{$resep->kembali}}" name="kembali" type="text" class="form-control"  placeholder="Kembali">
                  </div>
                </div>
                <center>
                          <a href="/apotik/resep" type="reset" class="btn btn-danger">Back</a>
                          <button type="reset" class="btn btn-primary">Clear Form</button>
                          <button type="submit"  value="edit" class="btn btn-info">Submit</button>
                </center>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
    </form>
</div>


@stop