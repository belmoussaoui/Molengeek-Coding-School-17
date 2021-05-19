@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">Edit Album</h2>
    <ul class="bg-danger rounded">
    
    @foreach ($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    
    </ul>
    <form action="/albums/{{ $album->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input value="{{ $album->nom }}" type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $album->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection