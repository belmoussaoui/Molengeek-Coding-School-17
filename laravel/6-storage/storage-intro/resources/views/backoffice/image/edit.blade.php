@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">Edit Image</h2>
    <form action="/image/{{ $image->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" value="{{ $image->nom }}" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Path</label>
            <input type="file" class="form-control" value="{{ $image->path }}" name="path">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $image->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection