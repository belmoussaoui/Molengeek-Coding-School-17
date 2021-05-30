@extends('layouts.app')
@section('content')
        <h1 class="text-center my-5">Joueur</h1>
        <div class="row align-items-center">
            <div>
                <p><strong>Nom :</strong> {{ $joueur->nom }}</p>
                <p><strong>Prénom :</strong> {{ $joueur->prenom }}</p>
                <p><strong>Age :</strong> {{ $joueur->age }}</p>
                <p><strong>Numéro :</strong> {{ $joueur->numero }}</p>
                <p><strong>Pays :</strong> {{ $joueur->pays }}</p>
                <p><strong>Role :</strong> {{ $joueur->role->nom }}</p>
                <p><strong>Genre :</strong> {{ $joueur->genre->type }}</p>
                <p><strong>Equipe :</strong> <a href="{{ route('equipes.show', $joueur->equipe) }}">{{ $joueur->equipe->nom }}</a> </p>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a href={{ route("joueurs.index") }} class="btn btn-danger text-white mx-auto">Revenir en arrière</a>
        </div>
@endsection