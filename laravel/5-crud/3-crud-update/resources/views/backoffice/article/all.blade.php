@extends('layouts.app')

@section('content')
    <a class="btn btn-success my-2" href="/article/create">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Auteur</th>
                <th scope="col">Poste</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
            <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->nom }}</td>
                <td>{{ $article->description }}</td>
                <td>{{ $article->auteur }}</td>
                <td>{{ $article->poste }}</td>
                <td>
                    <div class="d-flex">
                        <a class="mx-1 btn btn-primary text-white" href="/article/{{ $article->id }}/edit">Edit</a>
                        <form class="mx-1" action="/article/{{ $article->id }}/delete" method="post">
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