<h1> VIEW </h1>
<a href="pasien/create"> CREATE </a>

@foreach($pasien as $pasien)
    <p> {{ $pasien->id_kode_psn}} </p>
    <p> {{ $pasien->nama_psn}} </p>
    <p> {{ $pasien->alamat_psn}} </p>
    <p> {{ $pasien->gender_psn}} </p>
    <p> {{ $pasien->umur_psn}} </p>
    <p> {{ $pasien->telepon_psn}} </p>
	<a href="/pasien/{{$pasien->id}}/edit"> EDIT</a>
	<form action="/pasien/{{$pasien->id}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
    </form>

    <hr>

@endforeach
