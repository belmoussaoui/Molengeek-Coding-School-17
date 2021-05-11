@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">Create Photo</h2>
    <ul class="bg-danger rounded">
    
    @foreach ($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    
    </ul>
    <form action="/photos/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Lien</label>
            <input type="file" class="form-control" name="lien">
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
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection