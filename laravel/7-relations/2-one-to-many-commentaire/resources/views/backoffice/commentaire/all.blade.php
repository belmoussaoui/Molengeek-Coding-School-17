@extends('layouts.app')

@section('content')
    @if (session('message'))
        <div class="alert alert-success my-3">
            {{ session('message') }}
        </div>
    @endif
    <h2 class="text-center text-decoration-underline my-3">Commentaires</h2>
    <a class="btn btn-success my-2" href="{{ route('commentaires.create') }}">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Date de Commentaire</th>
                <th scope="col">Article</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($commentaires as $commentaire)
            <tr>
            <th scope="row">{{ $commentaire->id }}</th>
                <td><a href="/commentaires/{{ $commentaire->id }}">{{ $commentaire->nom }}</a></td>
                <td>{{ $commentaire->email }}</td>
                <td>{{ $commentaire->message }}</td>
                <td>{{ $commentaire->ddc }}</td>
                <td>{{ $commentaire->article->nom }}</td>
                <td>
                    <div class="d-flex">
                        <a class="mx-1 btn btn-primary text-white" href="/commentaires/{{ $commentaire->id }}/edit">Edit</a>
                        <form class="mx-1" action="/commentaires/{{ $commentaire->id }}" method="post">
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