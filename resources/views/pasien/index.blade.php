@extends('template.template')
@section('content')
<a class="btn btn-social btn-twitter" href="pasien/create">
    <i class="fa fa-plus"></i>Create
</a>
<div class="konten" style="padding: 10px 40px;">
    <?php $no=1; ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Pasien</th>
                  <th>Nama Pasien</th>
                  <th>Alamat</th>
                  <th>Gender</th>
                  <th>Umur</th>
                  <th>Telepon</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pasien as $pasien)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $pasien->id_kode_psn}}</td>
                  <td>{{ $pasien->nama_psn}}</td>
                  <td>{{ $pasien->alamat_psn}}</td>
                  <td>{{ $pasien->gender_psn}}</td>
                  <td>{{ $pasien->umur_psn}}</td>
                  <td>{{ $pasien->telepon_psn}}</td>
                  <td><form action="/apotik/pasien/{{$pasien->id}}" method="post">
                    <div class="akask">
                        <a class="btn btn-primary btn-xs" href="">
                            <i class='fa fa-eye' style="color: white"></i>
                        </a>
                        <a class="btn btn-warning btn-xs" href="/apotik/pasien/{{$pasien->id}}/edit">
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