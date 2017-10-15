@extends('template.template')
@section('content')

<div class="col-md-10 col-md-offset-1" style="padding: 0px 80px;">
    <form class="form-horizontal" action="/apotik/poliklinik/{{$poliklinik->id}}" method="post">

                <div class="form-group">
                  <label  class="col-sm-2 control-label">id_kode_plk</label>
                  <div class="col-sm-10">
                    <input value="{{$poliklinik->id_kode_plk}}" name="id_kode_plk" type="text" class="form-control"  placeholder="id_kode_plk">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">nama_plk</label>
                  <div class="col-sm-10">
                    <input value="{{$poliklinik->nama_plk}}" name="nama_plk" type="text" class="form-control"  placeholder="nama_plk">
                  </div>
                </div>
                <center>
                          <a href="/apotik/poliklinik" type="reset" class="btn btn-danger">Back</a>
                          <button type="reset" class="btn btn-primary">Clear Form</button>
                          <button type="submit"  value="put" class="btn btn-info">Submit</button>
                </center>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
    </form>
</div>
@stop