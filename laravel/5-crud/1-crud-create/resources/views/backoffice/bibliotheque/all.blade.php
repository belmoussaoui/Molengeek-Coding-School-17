@extends('layouts.app')

@section('content')
    <a class="btn btn-success my-2" href="/bibliotheque/create">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Numéro de telephone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bibliotheques as $bibliotheque)
            <tr>
            <th scope="row">{{ $bibliotheque->id }}</th>
                <td>{{ $bibliotheque->nom }}</td>
                <td>{{ $bibliotheque->adresse }}</td>
                <td>{{ $bibliotheque->ndt }}</td>
                <td>
                    <div class="d-flex">
                        <a class="mx-1 btn btn-primary text-white" href="/bibliotheque/{{ $bibliotheque->id }}/edit">Edit</a>
                        <form class="mx-1" action="/bibliotheque/{{ $bibliotheque->id }}/delete" method="post">
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