@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">Photos</h2>
    <a class="btn btn-success my-2" href="/photos/create">Create</a>
    
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Lien</th>
                <th scope="col">Categorie</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($photos as $photo)
            <tr>
            <th scope="row">{{ $photo->id }}</th>
                <td><a href="/photos/{{ $photo->id }}/show">{{ $photo->nom }}</a></td>
                <td><img style="width: 30%" src="{{ asset("img/" . $photo->lien) }}" alt=""></td>
                <td>{{ $photo->categorie }}</td>
                <td>{{ $photo->description }}</td>
               
                <td>
                    <div class="d-flex  align-items-center h-100">
                        <form class="mx-1" action="/photos/{{ $photo->id }}/download" method="post">
                            @csrf
                            <button class="btn btn-warning" type="submit">Download</button>
                        </form>
                        <a class="mx-1 btn btn-primary text-white" href="/photos/{{ $photo->id }}/edit">Edit</a>
                        <form class="mx-1" action="/photos/{{ $photo->id }}/delete" method="post"  enctype="multipart/form-data">
                            @csrf
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