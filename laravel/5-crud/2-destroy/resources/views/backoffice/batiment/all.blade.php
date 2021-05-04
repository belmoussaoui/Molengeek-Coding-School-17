@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Adresse</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($batiments as $b)
                <tr>
                    <th scope="row">{{ $b->id }}</th>
                    <td>{{ $b->nom }}</td>
                    <td>{{ $b->adresse }}</td>
                    <td>{{ $b->description }}</td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-primary mx-1" href="/batiment/{{ $b->id }}/edit">Edit</a>
                            <form action="/batiment/{{ $b->id }}/delete" method="post" class="mx-1">
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