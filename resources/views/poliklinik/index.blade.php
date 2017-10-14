<h1> VIEW </h1>
<a href="poliklinik/create"> CREATE </a>
@foreach($poliklinik as $poliklinik)
    <p> {{ $poliklinik->id_kode_plk}} </p>
    <p> {{ $poliklinik->nama_plk}} </p>
	<a href="/poliklinik/{{$poliklinik->id}}/edit"> EDIT</a>
	<form action="/poliklinik/{{$poliklinik->id}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
    </form>

    <hr>


@endforeach
