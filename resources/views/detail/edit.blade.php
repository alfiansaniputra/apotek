<h1> EDIT </h1>
<form action="/detail/{{$detail->id}}" method="post">
    
    <input type="text" value="{{$detail->nomorresep_id}}" name="nomorresep_id" value="" placeholder="nomorresep_id"><br>
    <input type="text" value="{{$detail->kode_obat_id}}" name="kode_obat_id" value="" placeholder="kode_obat_id"><br>
    <input type="text" value="{{$detail->harga}}" name="harga" value="" placeholder="harga"><br>
    <input type="text" value="{{$detail->dosis}}" name="dosis" value="" placeholder="dosis"><br>
    <input type="text" value="{{$detail->subtotal}}" name="subtotal" value="" placeholder="subtotal"><br>

    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>

