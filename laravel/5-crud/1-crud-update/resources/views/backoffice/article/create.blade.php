@extends('layouts.app')

@section('content')
    <h2 class="text-center my-4">Create Article</h2>
    <form method="POST" action="/article/store">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Auteur</label>
            <input type="text" class="form-control" name="auteur">
        </div>
        <div class="mb-3">
            <label class="form-label">Poste</label>
            <input type="text" class="form-control" name="poste">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection