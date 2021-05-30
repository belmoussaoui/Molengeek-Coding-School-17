@extends('layouts.app')

@section('content')
    @if (session('message'))
         <div class="alert alert-success my-3">
            {{ session('message') }}
        </div>
    @endif
    <h2 class="text-center text-decoration-underline my-3">Les équipes</h2>
    <a href="{{ route('equipes.create') }}" class="btn btn-success text-white">Create</a>
    <table class="table table-dark my-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Ville</th>
                <th scope="col">Pays</th>
                <th scope="col">Max</th>
                <th scope="col">ATT</th>
                <th scope="col">CT</th>
                <th scope="col">DC</th>
                <th scope="col">RP</th>
                <th scope="col">Continent</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipes as $equipe)
                <tr>
                    <th scope="row">{{ $equipe->id }}</th>
                    <td><a href="{{ route('equipes.show', $equipe) }}">{{ $equipe->nom }}</a></td>
                    <td>{{ $equipe->ville }}</td>
                    <td>{{ $equipe->pays }}</td>
                    <td>{{ $equipe->max }}</td>
                    <td>{{ $equipe->ATT }}</td>
                    <td>{{ $equipe->CT }}</td>
                    <td>{{ $equipe->DC }}</td>
                    <td>{{ $equipe->RP }}</td>
                    <td>{{ $equipe->continent->nom }}</td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-primary mx-1 text-white" href="{{ route('equipes.edit', $equipe) }}">Edit</a>
                            <form action="{{ route('equipes.destroy', $equipe) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="mx-1 btn btn-danger text-white">Delete</button>
                            </form>
                            hack:
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $equipes->links() }}
    </div>
    
@endsection