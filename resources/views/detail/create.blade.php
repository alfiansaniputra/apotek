<h1>CREATE</h1>

<form action="/detail" method="post">
    <input type="text" name="nomorresep_id" value="" placeholder="nomorresep_id"><br>
    <input type="text" name="kode_obat_id" value="" placeholder="kode_obat_id"><br>
    <input type="text" name="harga" value="" placeholder="harga"><br>
    <input type="text" name="dosis" value="" placeholder="dosis"><br>
    <input type="text" name="subtotal" value="" placeholder="subtotal"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>

