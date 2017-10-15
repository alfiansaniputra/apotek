@extends('template.template')
@section('content')

<div class="col-md-10 col-md-offset-1" style="padding: 0px 80px;">
    <form class="form-horizontal" action="/apotik/pasien/{{$pasien->id}}" method="post">
                <div class="form-group">
                  <label  class="col-sm-2 control-label">id_kode_psn</label>
                  <div class="col-sm-10">
                    <input value="{{$pasien->id_kode_psn}}" name="id_kode_psn" type="text" class="form-control"  placeholder="id_kode_psn">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">nama_psn</label>
                  <div class="col-sm-10">
                    <input value="{{$pasien->nama_psn}}" name="nama_psn" type="text" class="form-control"  placeholder="nama_psn">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">alamat_psn</label>
                  <div class="col-sm-10">
                    <input value="{{$pasien->alamat_psn}}" name="alamat_psn" type="text" class="form-control"  placeholder="alamat_psn">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">gender_psn</label>
                  <div class="col-sm-10">
                    <select value="{{$pasien->gender_psn}}" class="form-control" name="gender_psn">
                    <option value="l">Pria</option>
                    <option value="p">Wanita</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">umur_psn</label>
                  <div class="col-sm-10">
                    <input value="{{$pasien->umur_psn}}" name="umur_psn" type="text" class="form-control"  placeholder="umur_psn">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">telepon_psn</label>
                  <div class="col-sm-10">
                    <input value="{{$pasien->telepon_psn}}" name="telepon_psn" type="text" class="form-control"  placeholder="telepon_psn">
                  </div>
                </div>
                <center>
                          <a href="/apotik/pasien" type="reset" class="btn btn-danger">Back</a>
                          <button type="reset" class="btn btn-primary">Clear Form</button>
                          <button type="submit"  value="edit" class="btn btn-info">Submit</button>
                </center>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
    </form>
</div>


@stop