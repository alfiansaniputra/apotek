@extends('template.template')
@section('content')
<a class="btn btn-social btn-twitter" href="obat/create">
    <i class="fa fa-plus"></i>Create
</a>
<div class="konten" style="padding: 10px 40px;">
    <?php $no=1; ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nomor Resep</th>
                  <th>Kode Obat</th>
                  <th>Harga</th>
                  <th>Dosis</th>
                  <th>Subtotal</th>
                  <th>Jml Obat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($obat as $obat)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $obat->id_kode_obat}}</td>
                  <td>{{ $obat->nama_obat}}</td>
                  <td>{{ $obat->jenis_obat}}</td>
                  <td>{{ $obat->kategori}}</td>
                  <td>{{ $obat->harga_obat}}</td>
                  <td>{{ $obat->jumlah_obat}}</td>
                  <td><form action="/apotik/obat/{{$obat->id}}" method="post">
                    <div class="akask">
                        <a class="btn btn-primary btn-xs" href="">
                            <i class='fa fa-eye' style="color: white"></i>
                        </a>
                        <a class="btn btn-warning btn-xs" href="/apotik/obat/{{$obat->id}}/edit">
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