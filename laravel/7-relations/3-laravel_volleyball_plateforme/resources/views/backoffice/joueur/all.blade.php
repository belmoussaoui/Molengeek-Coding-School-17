@extends('layouts.app')
@section('content')
    @if (session('message'))
         <div class="alert alert-success my-3">
            {{ session('message') }}
        </div>
    @endif
    <h2 class="text-center text-decoration-underline my-3">Les joueurs</h2>
    <a href="{{ route('joueurs.create') }}" class="btn btn-success text-white">Create</a>
    <table class="table table-dark my-5">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nom</th>
                <th scope="col">prénom</th>
                <th scope="col">age</th>
                <th scope="col">numéro</th>
                <th scope="col">pays</th>
                <th scope="col">genre</th>
                <th scope="col">role</th>
                <th scope="col">équipe</th>
                <th scope="col">photo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($joueurs as $joueur)
                <tr>
                    <th scope="row">{{ $joueur->id }}</th>
                    <td><a href="{{ route('joueurs.show', $joueur) }}">{{ $joueur->nom }}</a></td>
                    <td>{{ $joueur->prenom }}</td>
                    <td>{{ $joueur->age }}</td>
                    <td>{{ $joueur->numero }}</td>
                    <td>{{ $joueur->pays }}</td>
                    <td>{{ $joueur->genre->typegit  }}</td>
                    <td>{{ $joueur->role->nom }}</td>
                    {{-- <td>{{ $joueur->equipe->nom ?  $joueur->equipe_id : "pas équipe" }}</td> --}}
                    <td>{{ $joueur -> equipe -> nom}} </td>
                   
                    <td>
                        @if ($joueur->photo)
                             <img class="w-25" src="{{ 'img/' . $joueur->photo->url }}" alt="">
                        @else
                            pas de photo
                        @endif
                    </td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-primary mx-1 text-white" href="{{ route('joueurs.edit', $joueur) }}">Edit</a>
                            <form action="{{ route('joueurs.destroy', $joueur) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="mx-1 btn btn-danger text-white">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $joueurs->links() }}
    </div>
    
@endsection