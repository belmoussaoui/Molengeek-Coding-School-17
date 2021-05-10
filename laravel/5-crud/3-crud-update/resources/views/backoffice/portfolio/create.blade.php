@extends('layouts.app')

@section('content')
    <h2 class="text-center my-4">Create Portfolio</h2>
    <form method="POST" action="/portfolio/store">
        @csrf
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" class="form-control" name="titre">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Path</label>
            <input type="text" class="form-control" name="path">
        </div>
        <div class="mb-3">
            <label class="form-label">Catégorie</label>
            <input type="text" class="form-control" name="categorie">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    
@endsection