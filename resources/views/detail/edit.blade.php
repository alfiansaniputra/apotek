@extends('template.template')
@section('content')

<div class="col-md-10 col-md-offset-1" style="padding: 0px 80px;">
    <form class="form-horizontal" action="/apotik/detail/{{$detail->id}}" method="post">
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Nomor Resep</label>
                  <div class="col-sm-10">
                    <input name="nomorresep_id" value="{{$detail->nomorresep_id}}" type="text" class="form-control"  placeholder="nomorresep_id" >
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Kode Obat</label>
                  <div class="col-sm-10">
                    <input name="kode_obat_id" value="{{$detail->kode_obat_id}}" type="text" class="form-control"  placeholder="kode_obat_id" >
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-10">
                    <input name="harga" value="{{$detail->harga}}" type="text" class="form-control"  placeholder="harga" >
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Dosis</label>
                  <div class="col-sm-10">
                    <input name="dosis" value="{{$detail->dosis}}" type="text" class="form-control"  placeholder="dosis" >
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Subtotal</label>
                  <div class="col-sm-10">
                    <input name="subtotal" value="{{$detail->subtotal}}" type="text" class="form-control"  placeholder="subtotal" >
                  </div>
                </div>
                <center>
                          <a href="/apotik/detail" type="reset" class="btn btn-danger">Back</a>
                          <button type="reset" class="btn btn-primary">Clear Form</button>
                          <button type="submit"  value="edit" class="btn btn-info">Submit</button>
                </center>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
    </form>
</div>



@stop