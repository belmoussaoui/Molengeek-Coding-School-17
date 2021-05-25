@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">Create Commentaire</h2>
    <ul class="bg-danger rounded">
    
    @foreach ($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    
    </ul>
    <form action="{{ route('commentaires.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Message</label>
            <input type="text" class="form-control" name="message">
        </div>
        <div class="mb-3">
            <label class="form-label">Date de Commentaire</label>
             <input type="date" class="form-control" name="ddc">
        </div>
        <div class="mb-3">
            <label class="form-label">Article</label>
            <select name="article_id" class="form-control">
                @foreach ($articles as $article)
                    <option value="{{ $article->id }}">{{ $article->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection