@extends('template.template')
@section('content')
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

<h2>hallo ini halaman index</h2>
<h1><a href="{{ url('apotik/detail')}}">detail</a></h1>
<h1><a href="{{ url('apotik/resep')}}">resep</a></h1>
<h1><a href="{{ url('apotik/obat')}}">obat</a></h1>
<h1><a href="{{ url('apotik/pasien')}}">pasien</a></h1>
<h1><a href="{{ url('apotik/poliklinik')}}">poliklinik</a></h1>
@stop