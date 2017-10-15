@extends('template.template')
@section('content')
<a class="btn btn-social btn-twitter" href="poliklinik/create">
    <i class="fa fa-plus"></i>Create
</a>
<div class="konten" style="padding: 10px 40px;">
    <?php $no=1; ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nomor Resep</th>
                  <th>Kode poliklinik</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($poliklinik as $poliklinik)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $poliklinik->id_kode_plk}}</td>
                  <td>{{ $poliklinik->nama_plk}}</td>
                  <td><form action="/apotik/poliklinik/{{$poliklinik->id}}" method="post">
                    <div class="akask">
                        <a class="btn btn-primary btn-xs" href="">
                            <i class='fa fa-eye' style="color: white"></i>
                        </a>
                        <a class="btn btn-warning btn-xs" href="/apotik/poliklinik/{{$poliklinik->id}}/edit">
                            <i class='fa fa-pencil' style="color: white"></i>
                        </a>
                        
                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
                            <input type="hidden" value="delete" name="_method">
                            <button type="submit" value="delete" class="btn btn-danger btn-xs"><i class='fa fa-trash' style="color: white"></i></button>
                        </form>

                    </div>
                  </td>
                </tr>

                @endforeach    
                </tbody>
                <tfoot>
                
                </tfoot>
              </table>




</div><!--end lam-->

@stop