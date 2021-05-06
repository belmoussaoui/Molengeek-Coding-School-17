@extends('layouts.app')

@section('content')
    <h2 class="text-center my-2">Entreprises</h2>
    <a class="btn btn-success my-2" href="/entreprise/create">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Numéro de téléphone</th>
                <th scope="col">Contact</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entreprises as $entreprise)
            <tr>
            <th scope="row">{{ $entreprise->id }}</th>
                <td>{{ $entreprise->nom }}</td>
                <td>{{ $entreprise->adresse }}</td>
                <td>{{ $entreprise->ndt }}</td>
                <td>{{ $entreprise->contact }}</td>
                <td>{{ $entreprise->image }}</td>
                <td>
                    <div class="d-flex">
                        <a class="mx-1 btn btn-primary text-white" href="/entreprise/{{ $entreprise->id }}/edit">Edit</a>
                        <form class="mx-1" action="/entreprise/{{ $entreprise->id }}/delete" method="post">
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