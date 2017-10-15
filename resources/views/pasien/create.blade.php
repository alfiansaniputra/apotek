@extends('template.template')
@section('content')
<div class="col-md-10 col-md-offset-1" style="padding: 0px 80px;">
    <form class="form-horizontal" action="/apotik/pasien" method="post">
                <div class="form-group">
                  <label  class="col-sm-2 control-label">id_kode_psn</label>
                  <div class="col-sm-10">
                    <input name="id_kode_psn" type="text" class="form-control"  placeholder="id_kode_psn">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">nama_psn</label>
                  <div class="col-sm-10">
                    <input name="nama_psn" type="text" class="form-control"  placeholder="nama_psn">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">alamat_psn</label>
                  <div class="col-sm-10">
                    <input name="alamat_psn" type="text" class="form-control"  placeholder="alamat_psn">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">gender_psn</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="gender_psn">
                    <option value="l">Pria</option>
                    <option value="p">Wanita</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">umur_psn</label>
                  <div class="col-sm-10">
                    <input name="umur_psn" type="text" class="form-control"  placeholder="umur_psn">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">telepon_psn</label>
                  <div class="col-sm-10">
                    <input name="telepon_psn" type="text" class="form-control"  placeholder="telepon_psn">
                  </div>
                </div>
                <center>
                          <a href="/apotik/pasien" type="reset" class="btn btn-danger">Back</a>
                          <button type="reset" class="btn btn-primary">Clear Form</button>
                          <button type="submit"  value="post" class="btn btn-info">Submit</button>
                </center>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    </form>
</div>


@stop