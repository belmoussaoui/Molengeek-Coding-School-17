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
                        <form action="/eleve/{{ $e->id }}/delete" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    
@endsection