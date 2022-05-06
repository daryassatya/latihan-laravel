@extends('layouts.main')
@section('container')
    <h1>About Me</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="Foto Saya">
@endsection
