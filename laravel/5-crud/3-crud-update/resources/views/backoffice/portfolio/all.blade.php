@extends('layouts.app')

@section('content')
    <h2 class="text-center my-2">Portfolio</h2>
    <a class="btn btn-success my-2" href="/portfolio/create">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Path</th>
                <th scope="col">Catégorie</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portfolios as $portfolio)
            <tr>
            <th scope="row">{{ $portfolio->id }}</th>
                <td>{{ $portfolio->titre }}</td>
                <td>{{ $portfolio->description }}</td>
                <td>{{ $portfolio->path }}</td>
                <td>{{ $portfolio->categorie }}</td>
                <td>
                    <div class="d-flex">
                        <a class="mx-1 btn btn-primary text-white" href="/portfolio/{{ $portfolio->id }}/edit">Edit</a>
                        <form class="mx-1" action="/portfolio/{{ $portfolio->id }}/delete" method="post">
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