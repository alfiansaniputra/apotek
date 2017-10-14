<h1> EDIT </h1>
<form action="/resep/{{$resep->id}}" method="post">
  
    <input type="text" value="{{$resep->id_nomorresep}}" name="id_nomorresep" value="" placeholder="id_nomorresep"><br>
    <input type="text" value="{{$resep->tanggal_resep}}" name="tanggal_resep" value="" placeholder="tanggal_resep"><br>
    <input type="text" value="{{$resep->kode_dkt_id}}" name="kode_dkt_id" value="" placeholder="kode_dkt_id"><br>
    <input type="text" value="{{$resep->kode_psn_id}}" name="kode_psn_id" value="" placeholder="kode_psn_id"><br>
    <input type="text" value="{{$resep->kode_plk_id}}" name="kode_plk_id" value="" placeholder="kode_plk_id"><br>
    <input type="text" value="{{$resep->total_harga}}" name="total_harga" value="" placeholder="total_harga"><br>
    <input type="text" value="{{$resep->bayar}}" name="bayar" value="" placeholder="bayar"><br>
    <input type="text" value="{{$resep->kembali}}" name="kembali" value="" placeholder="kembali"><br>

    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>

