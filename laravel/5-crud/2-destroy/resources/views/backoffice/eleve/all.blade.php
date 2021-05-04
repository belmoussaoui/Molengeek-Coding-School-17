@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Age</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Belge</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eleves as $e)
                <tr>
                    <th scope="row">{{ $e->id }}</th>
                    <td>{{ $e->nom }}</td>
                    <td>{{ $e->prenom }}</td>
                    <td>{{ $e->age }}</td>
                    <td>{{ $e->ddn }}</td>
                    <td>{{ $e->estBelge ? "Oui" : "Non" }}</td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-primary mx-1" href="/eleve/{{ $e->id }}/edit">Edit</a>
                            <form class="mx-1" action="/eleve/{{ $e->id }}/delete" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    
@endsection