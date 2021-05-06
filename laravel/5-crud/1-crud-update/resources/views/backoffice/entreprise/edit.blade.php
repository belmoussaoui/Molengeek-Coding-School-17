@extends('layouts.app')

@section('content')
    <h2 class="text-center my-4">Edit Entreprise</h2>
    <form method="POST" action="/entreprise/{{ $entreprise->id }}/update">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" value="{{ $entreprise->nom }}" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Adresse</label>
            <textarea class="form-control" name="adresse" id="" cols="30" rows="10">{{ $entreprise->adresse }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Numéro de téléphone</label>
            <input type="text" class="form-control" value="{{ $entreprise->ndt }}" name="ndt">
        </div>
        <div class="mb-3">
            <label class="form-label">Contact</label>
            <input type="text" class="form-control" value="{{ $entreprise->contact }}" name="contact">
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="text" class="form-control" value="{{ $entreprise->image }}" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    
@endsection