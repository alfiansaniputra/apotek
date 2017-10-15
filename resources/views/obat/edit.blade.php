@extends('template.template')
@section('content')
<div class="col-md-10 col-md-offset-1" style="padding: 0px 80px;">
    <form class="form-horizontal" action="/apotik/obat/{{$obat->id}}" method="post">
                <div class="form-group">
                  <label  class="col-sm-2 control-label">id_kode_obat</label>
                  <div class="col-sm-10">
                    <input value="{{$obat->id_kode_obat}}" name="id_kode_obat" type="text" class="form-control"  placeholder="id_kode_obat">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">nama_obat</label>
                  <div class="col-sm-10">
                    <input value="{{$obat->nama_obat}}" name="nama_obat" type="text" class="form-control"  placeholder="nama_obat">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">jenis_obat</label>
                  <div class="col-sm-10">
                    <input value="{{$obat->jenis_obat}}" name="jenis_obat" type="text" class="form-control"  placeholder="jenis_obat">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">kategori</label>
                  <div class="col-sm-10">
                    <input value="{{$obat->kategori}}" name="kategori" type="text" class="form-control"  placeholder="kategori">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">harga_obat</label>
                  <div class="col-sm-10">
                    <input value="{{$obat->harga_obat}}" name="harga_obat" type="text" class="form-control"  placeholder="harga_obat">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">jumlah_obat</label>
                  <div class="col-sm-10">
                    <input value="{{$obat->jumlah_obat}}" name="jumlah_obat" type="text" class="form-control"  placeholder="jumlah_obat">
                  </div>
                </div>
                <center>
                          <a href="/apotik/obat" type="reset" class="btn btn-danger">Back</a>
                          <button type="reset" class="btn btn-primary">Clear Form</button>
                          <button type="submit"  value="edit" class="btn btn-info">Submit</button>
                </center>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
    </form>
</div>



@stop