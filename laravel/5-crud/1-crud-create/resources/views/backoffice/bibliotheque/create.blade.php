@extends('layouts.app')

@section('content')
    
    <form action="/bibliotheque/store" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Adresse</label>
            <input type="text" class="form-control" name="adresse">
        </div>
        <div class="mb-3">
            <label class="form-label">Numéro de téléphone</label>
            <input type="tel" class="form-control" name="ndt">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection