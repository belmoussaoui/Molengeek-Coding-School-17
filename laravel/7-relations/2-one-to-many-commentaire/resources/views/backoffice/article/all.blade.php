@extends('layouts.app')

@section('content')
    @if (session('message'))
        <div class="alert alert-success my-3">
            {{ session('message') }}
        </div>
    @endif
    <h2 class="text-center text-decoration-underline my-3">Articles</h2>
    <a class="btn btn-success my-2" href="{{ route('articles.create') }}">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Image</th>
                <th scope="col">Categorie</th>
                <th scope="col">Description</th>
                <th scope="col">Auteur</th>
                <th scope="col">Date de Publication</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
            <th scope="row">{{ $article->id }}</th>
                <td><a href="/articles/{{ $article->id }}">{{ $article->nom }}</a></td>
                <td class="text-center"><img class="col-3" src="{{'img/' . $article->image }}" alt=""></td>
                <td>{{ $article->categorie }}</td>
                <td>{{ $article->description }}</td>
                <td>{{ $article->auteur }}</td>
                <td>{{ $article->ddp }}</td>
                <td>
                    <div class="d-flex">
                        <form class="mx-1" action="/articles/{{ $article->id }}/download" method="post">
                            @csrf
                            <button class="btn btn-success text-white" type="submit">Download</button>
                        </form>
                        {{-- <a href="/articles/{{ $article->id }}/download">Download</a> --}}
                        <a class="mx-1 btn btn-primary text-white" href="/articles/{{ $article->id }}/edit">Edit</a>
                        <form class="mx-1" action="/articles/{{ $article->id }}" method="post">
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
    <div>
        {{ $articles->links() }}
    </div>
    
@endsection