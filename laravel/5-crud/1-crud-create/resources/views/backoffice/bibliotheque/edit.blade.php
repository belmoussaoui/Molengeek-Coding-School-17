@extends('layouts.app')

@section('content')
    
    <form action="/bibliotheque/{{ $bibliotheque->id }}/update" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" value="{{ $bibliotheque->nom }}" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Adresse</label>
            <input type="text" class="form-control" value="{{ $bibliotheque->adresse }}" name="adresse">
        </div>
        <div class="mb-3">
            <label class="form-label">Numéro de téléphone</label>
            <input type="tel" class="form-control" value="{{ $bibliotheque->ndt }}" name="ndt">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection