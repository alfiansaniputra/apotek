<h1> EDIT </h1>
<form action="/obat/{{$obat->id}}" method="post">
  
    <input type="text" value="{{$obat->id_kode_obat}}" name="id_kode_obat" value="" placeholder="id_kode_obat"><br>
    <input type="text" value="{{$obat->nama_obat}}" name="nama_obat" value="" placeholder="nama_obat"><br>
    <input type="text" value="{{$obat->jenis_obat}}" name="jenis_obat" value="" placeholder="jenis_obat"><br>
    <input type="text" value="{{$obat->kategori}}" name="kategori" value="" placeholder="kategori"><br>
    <input type="text" value="{{$obat->harga_obat}}" name="harga_obat" value="" placeholder="harga_obat"><br>
    <input type="text" value="{{$obat->jumlah_obat}}" name="jumlah_obat" value="" placeholder="jumlah_obat"><br>

    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>

