<h1>CREATE</h1>

<form action="/obat" method="post">
    <input type="text" name="id_kode_obat" value="" placeholder="id_kode_obat"><br>
    <input type="date" name="nama_obat" value="" placeholder="nama_obat"><br>
    <input type="text" name="jenis_obat" value="" placeholder="jenis_obat"><br>
    <input type="text" name="kategori" value="" placeholder="kategori"><br>
    <input type="text" name="harga_obat" value="" placeholder="harga_obat"><br>
    <input type="text" name="jumlah_obat" value="" placeholder="jumlah_obat"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>

