<h1>CREATE</h1>

<form action="/resep" method="post">
    <input type="text" name="id_nomorresep" value="" placeholder="id_nomorresep"><br>
    <input type="date" name="tanggal_resep" value="" placeholder="tanggal_resep"><br>
    <input type="text" name="kode_dkt_id" value="" placeholder="kode_dkt_id"><br>
    <input type="text" name="kode_psn_id" value="" placeholder="kode_psn_id"><br>
    <input type="text" name="kode_plk_id" value="" placeholder="kode_plk_id"><br>
    <input type="text" name="total_harga" value="" placeholder="total_harga"><br>
    <input type="text" name="bayar" value="" placeholder="bayar"><br>
    <input type="text" name="kembali" value="" placeholder="kembali"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>

