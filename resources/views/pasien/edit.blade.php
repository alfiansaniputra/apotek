<h1> EDIT </h1>
<form action="/pasien/{{$pasien->id}}" method="post">
  
    <input type="text" value="{{$pasien->id_kode_psn}}" name="id_kode_psn" value="" placeholder="id_kode_psn"><br>
    <input type="text" value="{{$pasien->nama_psn}}" name="nama_psn" value="" placeholder="nama_psn"><br>
    <input type="text" value="{{$pasien->alamat_psn}}" name="alamat_psn" value="" placeholder="alamat_psn"><br>
    <input type="text" value="{{$pasien->gender_psn}}" name="gender_psn" value="" placeholder="gender_psn"><br>
    <input type="text" value="{{$pasien->umur_psn}}" name="umur_psn" value="" placeholder="umur_psn"><br>
    <input type="text" value="{{$pasien->telepon_psn}}" name="telepon_psn" value="" placeholder="telepon_psn"><br>

    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>

