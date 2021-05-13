@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">{{ $album->nom }}</h2>
    <ul>
        <p>{{ $album->description  }}</p>
    </ul>

@endsection