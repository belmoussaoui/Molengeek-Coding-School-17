@extends('layouts.app')

@section('content')
    @if (session('message'))
        <div class="alert alert-success my-3">
            {{ session('message') }}
        </div>
    @endif
    <h2 class="text-center text-decoration-underline my-3">Photos</h2>
    <a class="btn btn-success my-2" href="{{ route('photos.create') }}">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Lien</th>
                <th scope="col">Categorie</th>
                <th scope="col">Description</th>
                <th scope="col">Album</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($photos as $photo)
            <tr>
            <th scope="row">{{ $photo->id }}</th>
                <td><a href="/photos/{{ $photo->id }}">{{ $photo->nom }}</a></td>
                <td class="text-center"><img class="col-3" src="{{'img/' . $photo->lien }}" alt=""></td>
                <td>{{ $photo->categorie }}</td>
                <td>{{ $photo->description }}</td>
                <td>{{ $photo->album->nom }}</td>
                <td>
                    <div class="d-flex">
                        <a class="mx-1 btn btn-primary text-white" href="/photos/{{ $photo->id }}/edit">Edit</a>
                        <form class="mx-1" action="/photos/{{ $photo->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger text-white" type="submit">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
            @endforeach
        </tbody>
    </table>
    
@endsection