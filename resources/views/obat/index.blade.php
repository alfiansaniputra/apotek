<h1> VIEW </h1>
<a href="obat/create"> CREATE </a>

@foreach($obat as $obat)
    <p> {{ $obat->id_kode_obat}} </p>
    <p> {{ $obat->nama_obat}} </p>
    <p> {{ $obat->jenis_obat}} </p>
    <p> {{ $obat->kategori}} </p>
    <p> {{ $obat->harga_obat}} </p>
    <p> {{ $obat->jumlah_obat}} </p>
	<a href="/obat/{{$obat->id}}/edit"> EDIT</a>
	<form action="/obat/{{$obat->id}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
    </form>

    <hr>


@endforeach
