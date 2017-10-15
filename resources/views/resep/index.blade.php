@extends('template.template')
@section('content')
<a class="btn btn-social btn-twitter" href="resep/create">
    <i class="fa fa-plus"></i>Create
</a>
<div class="konten" style="padding: 10px 40px;">
    <?php $no=1; ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Resep</th>
                  <th>Tgl Resep</th>
                  <th>Kode Dokter</th>
                  <th>Kode Pasien</th>
                  <th>Kode Polik</th>
                  <th>Total</th>
                  <th>Bayar</th>
                  <th>Kembali</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($resep as $resep)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $resep->id_nomorresep}}</td>
                  <td>{{ $resep->tanggal_resep}}</td>
                  <td>{{ $resep->kode_dkt_id}}</td>
                  <td>{{ $resep->kode_psn_id}}</td>
                  <td>{{ $resep->kode_plk_id}}</td>
                  <td>{{ $resep->total_harga}}</td>
                  <td>{{ $resep->bayar}}</td>
                  <td>{{ $resep->kembali}}</td>
                  <td><form action="/apotik/resep/{{$resep->id}}" method="post">
                    <div class="akask">
                        <a class="btn btn-primary btn-xs" href="">
                            <i class='fa fa-eye' style="color: white"></i>
                        </a>
                        <a class="btn btn-warning btn-xs" href="/apotik/resep/{{$resep->id}}/edit">
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