@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">Edit Article</h2>
    <ul class="bg-danger rounded">
    
    @foreach ($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    
    </ul>
    <form action="/articles/{{ $article->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input value="{{ $article->nom }}"type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input value="{{ $article->image }}"type="file" class="form-control" name="image">
        </div>
        <div class="mb-3">
            <label class="form-label">Categorie</label>
            <input value="{{ $article->categorie }}"type="text" class="form-control" name="categorie">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $article->description }}
            </textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Auteur</label>
            <input value="{{ $article->auteur }}"type="text" class="form-control" name="auteur">
        </div>
        <div class="mb-3">
            <label class="form-label">Date de Publication</label>
            <input value="{{ $article->ddp }}"type="date" class="form-control" name="ddp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection