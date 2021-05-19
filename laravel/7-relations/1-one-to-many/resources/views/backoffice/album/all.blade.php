@extends('layouts.app')

@section('content')
    @if (session('message'))
        <div class="alert alert-success my-3">
            {{ session('message') }}
        </div>
    @endif
    <h2 class="text-center text-decoration-underline my-3">Albums</h2>
    <a class="btn btn-success my-2" href="{{ route('albums.create') }}">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
            <tr>
            <th scope="row">{{ $album->id }}</th>
                <td><a href="/albums/{{ $album->id }}">{{ $album->nom }}</a></td>
                <td>{{ $album->description }}</td>
                <td>
                    <div class="d-flex">
                        <a class="mx-1 btn btn-primary text-white" href="/albums/{{ $album->id }}/edit">Edit</a>
                        <form class="mx-1" action="/albums/{{ $album->id }}" method="post">
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