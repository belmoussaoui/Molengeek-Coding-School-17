@extends('layout.app')
@section('content')


@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col-8">
                <h3 class="mb-0 py-2">Caracteristiques</h3>
            </div>
            <div class="col-4 text-right">
                <a href={{ route("caracteristiques.create") }} class="py-3 btn btn-sm btn-primary">Add Caracteristique</a>
            </div>
        </div>
    </div>
    
    
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr class="bg-light">
                    <th scope="col">#</th>
                    <th scope="col">Icone</th>
                    <th scope="col">Chiffres</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($caracteristiques as $caracteristique)
   
                <tr>
                    <th scope="row">{{ $caracteristique->id }}</th>
                    <td><a href="/caracteristiques/{{ $caracteristique->id }}"><i class="fas fa-2x {{ $caracteristique->icone}}"></i></a></td>
                    <td>{{ $caracteristique->chiffres }}</td>
                    <td>{{ $caracteristique->nom }}</td>
                    <td>
                        <div class="d-flex ">
                            <a href="/caracteristiques/{{ $caracteristique->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                            <form action="/caracteristiques/{{ $caracteristique->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger mx-1 " type="submit">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer py-4">
        <nav class="d-flex justify-content-end" aria-label="...">
            {{ $caracteristiques->links() }} 
        </nav>
    </div>
</div>
@endsection