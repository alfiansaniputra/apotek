<h1> EDIT </h1>
<form action="/poliklinik/{{$poliklinik->id}}" method="post">
    
    <input type="text" value="{{$poliklinik->id_kode_plk}}" name="id_kode_plk" value="" placeholder="id_kode_plk"><br>
    <input type="text" value="{{$poliklinik->nama_plk}}" name="nama_plk" value="" placeholder="nama_plk"><br>
    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>

