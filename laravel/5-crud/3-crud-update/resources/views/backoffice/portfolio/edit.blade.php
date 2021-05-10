@extends('layouts.app')

@section('content')
    <h2 class="text-center my-4">Edit Portfolio</h2>
    <form method="POST" action="/portfolio/{{ $portfolio->id }}/update">
        @csrf
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" class="form-control" value="{{ $portfolio->titre }}" name="titre">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $portfolio->description }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Path</label>
            <input type="text" class="form-control" value="{{ $portfolio->path }}" name="path">
        </div>
        <div class="mb-3">
            <label class="form-label">Catégorie</label>
            <input type="text" class="form-control" value="{{ $portfolio->categorie }}" name="categorie">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    
@endsection