@extends('layouts.app')

@section('content')
    <section class="container">
        <h2 class="text-center my-4">Edit Eleve</h2>
        <form action="/eleve/{{ $eleve->id }}/update" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" value="{{ $eleve->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Prenom</label>
                <input type="text" class="form-control" value="{{ $eleve->prenom }}" name="prenom">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" class="form-control" value="{{ $eleve->age }}" name="age">
            </div>
            <div class="mb-3">
                <label class="form-label">Date de naissance</label>
                <input type="date" class="form-control" value="{{ $eleve->ddn }}" name="ddn">
            </div>
            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" {{ $eleve->estBelge ? "checked" : null }} name="estBelge">
                <label class="form-check-label">Belge</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection