@extends('layouts.app')

@section('content')
    <h2 class="text-center my-4">Edit Article</h2>
    <form method="POST" action="/article/{{ $article->id }}/update">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" value="{{ $article->nom }}" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $article->description }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Auteur</label>
            <input type="text" class="form-control" value="{{ $article->auteur }}" name="auteur">
        </div>
        <div class="mb-3">
            <label class="form-label">Poste</label>
            <input type="text" class="form-control" value="{{ $article->poste }}" name="poste">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    
@endsection