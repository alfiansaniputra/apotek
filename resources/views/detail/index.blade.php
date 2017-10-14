<h1> VIEW </h1>
<a href="detail/create"> CREATE </a>
@foreach($detail as $detail)
    <p> {{ $detail->nomorresep_id}} </p>
    <p> {{ $detail->kode_obat_id}} </p>
    <p> {{ $detail->harga}} </p>
    <p> {{ $detail->dosis}} </p>
    <p> {{ $detail->subtotal}} </p>
	<a href="/detail/{{$detail->id}}/edit"> EDIT</a>
	<form action="/detail/{{$detail->id}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
    </form>

    <hr>


@endforeach
