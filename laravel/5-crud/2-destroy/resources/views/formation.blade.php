@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Nombre de personnes</th>
            <th scope="col">Hors condition</th>
            <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formations as $f)
                <tr>
                    <th scope="row">{{ $f->id }}</th>
                    <td>{{ $f->nom }}</td>
                    <td>{{ $f->ndp }}</td>
                    <td>{{ $f->ndpHC }}</td>
                    <td>{{ $f->description }}</td>
                    <td>
                        <form action="/formation/{{ $f->id }}/delete" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    
@endsection