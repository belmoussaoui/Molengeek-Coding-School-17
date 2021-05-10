@extends('layouts.app')

@section('content')
    <h2 class="text-center my-4">Create Entreprise</h2>
    <form method="POST" action="/entreprise/store">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Adresse</label>
            <textarea class="form-control" name="adresse" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Numéro de téléphone</label>
            <input type="text" class="form-control" name="ndt">
        </div>
        <div class="mb-3">
            <label class="form-label">Contact</label>
            <input type="text" class="form-control" name="contact">
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="text" class="form-control" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    
@endsection