<h1> VIEW </h1>
<a href="resep/create"> CREATE </a>
@foreach($resep as $resep)
    <p> {{ $resep->id_nomorresep}} </p>
    <p> {{ $resep->tanggal_resep}} </p>
    <p> {{ $resep->kode_dkt_id}} </p>
    <p> {{ $resep->kode_psn_id}} </p>
    <p> {{ $resep->kode_plk_id}} </p>
    <p> {{ $resep->total_harga}} </p>
    <p> {{ $resep->bayar}} </p>
    <p> {{ $resep->kembali}} </p>
	<a href="/resep/{{$resep->id}}/edit"> EDIT</a>
	<form action="/resep/{{$resep->id}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
    </form>

    <hr>


@endforeach
