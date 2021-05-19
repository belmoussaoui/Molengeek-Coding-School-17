@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Caracteristique</h5>
            <p>Icone: <i class="fas fa-2x {{ $caracteristique->icone }}"></i></p>
            <p>Chiffres: {{ $caracteristique->chiffres }}</p>
            <p>Nom: {{ $caracteristique->nom }}</p>
          <a href="{{ route("caracteristiques.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection