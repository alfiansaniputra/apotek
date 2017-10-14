<h1>CREATE</h1>

<form action="/pasien" method="post">
    <input type="text" name="id_kode_psn" value="" placeholder="id_kode_psn"><br>
    <input type="date" name="nama_psn" value="" placeholder="nama_psn"><br>
    <input type="text" name="alamat_psn" value="" placeholder="alamat_psn"><br>

    <select name="gender_psn" id="">
    	<option value="p">P</option>
    	<option value="l">L</option>
    </select><br>
    <input type="text" name="umur_psn" value="" placeholder="umur_psn"><br>
    <input type="text" name="telepon_psn" value="" placeholder="telepon_psn"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>

