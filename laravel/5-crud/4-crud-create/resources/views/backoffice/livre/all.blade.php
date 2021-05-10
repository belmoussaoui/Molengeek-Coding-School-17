@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">Livre</h2>
    <a class="btn btn-success my-2" href="/livre/create">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Auteur</th>
                <th scope="col">Date de publication</th>
                <th scope="col">Nombre de pages</th>
                <th scope="col">Mobile</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livres as $livre)
            <tr>
            <th scope="row">{{ $livre->id }}</th>
                <td>{{ $livre->titre }}</td>
                <td>{{ $livre->auteur }}</td>
                <td>{{ $livre->ddp }}</td>
                <td>{{ $livre->ndp }}</td>
                <td>{{ $livre->estMobile ? 'Oui' : 'Non' }}</td>
                <td>
                    <div class="d-flex">
                        <a class="mx-1 btn btn-primary text-white" href="/livre/{{ $livre->id }}/edit">Edit</a>
                    <form class="mx-1" action="/livre/{{ $livre->id }}/delete" method="post">
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