@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">Edit Photo</h2>
    <ul class="bg-danger rounded">
    
    @foreach ($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    
    </ul>
    <form action="/photos/{{ $photo->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("put")
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input value="{{ $photo->nom }}" type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Lien</label>
            <input value="{{ public_path('img/') . $photo->lien }}" type="file" class="form-control" name="lien">
        </div>
        <div class="mb-3">
            <label class="form-label">Categorie</label>
            <select class="form-control" name="categorie">
                <option value="category1">category 1</option>
                <option value="category2">category 2</option>
                <option value="category3">category 3</option>
                <option value="category4">category 4</option>
                <option value="category5">category 5</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $photo->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection