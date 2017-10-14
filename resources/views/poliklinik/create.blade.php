<h1>CREATE</h1>

<form action="/poliklinik" method="post">
    <input type="text" name="id_kode_plk" value="" placeholder="id_kode_plk"><br>
    <input type="text" name="nama_plk" value="" placeholder="nama_plk"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>

