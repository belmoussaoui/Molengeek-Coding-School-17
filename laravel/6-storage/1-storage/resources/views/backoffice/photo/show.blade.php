@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">{{ $photo->nom }}</h2>
    <div class='row my-5'>
        <div class="col-5">
            <img class="img-thumbnail" src="{{ asset( "img/" . $photo->lien ) }}" alt="">
        </div>
        <div class="col-7 p-5">
            <h2>Description:</h2>
            <p>{{ $photo->description  }}</p>
            <h4>Categorie:</h4>
            <span>{{ $photo->categorie }}</span>
        </div>
    </div>
@endsection