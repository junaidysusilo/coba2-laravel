@extends('layouts.main')

@section('container')
    <h1> Halaman About </h1>
    <h3> {{ $name }} </h3>
    <p> {{ $email }} </p>
    <p> {{ $jurusan }} </p>
    <img src="img/{{ $image }}" alt="{{ $name }}" style="width: 200px" class="img-thumbnail rounded-circle">
@endsection