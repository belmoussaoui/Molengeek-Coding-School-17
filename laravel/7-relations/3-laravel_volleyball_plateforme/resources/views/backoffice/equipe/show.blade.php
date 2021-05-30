
@extends('layouts.app')

@section('content')
        <h1 class="text-center my-5">Equipe</h1>
        <div class="row align-items-center">
            <div>
                <p><strong>Nom :</strong> {{ $equipe->nom }}</p>
                <p><strong>Ville :</strong> {{ $equipe->ville }}</p>
                <p><strong>Pays :</strong> {{ $equipe->pays }}</p>
                <p><strong>Max :</strong> {{ count($equipe->joueurs) . '/' . $equipe->max }}</p>
                <p><strong>ATT :</strong> {{ count($att) . '/' . $equipe->ATT }}</p>
                <p><strong>CT :</strong> {{ count($mil) . '/' . $equipe->CT }}</p>
                <p><strong>DC :</strong> {{ count($def) . '/' . $equipe->DC }}</p>
                <p><strong>RP :</strong> {{ count($rem) . '/' . $equipe->RP }}</p>
                <p><strong>Continent :</strong> {{ $equipe->continent->nom }}</p>
            </div>
            <h2 class="text-center my-3">Joueurs</h2>
            <table class="table my-1">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Rôle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($equipe->joueurs as $joueur)
                        <tr>
                            <th scope="row">{{ $joueur->id }}</th>
                            <td><a href="{{ route('joueurs.show', $joueur) }}">{{ $joueur->nom }}</a></td>
                            <td>{{ $joueur->prenom }}</td>
                            <td>{{ $joueur->role->nom }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        <div class="my-3">
            <h2 class="text-center my-3">Ajouter un joueur</h2>
            <form action="/equipes/{{ $equipe->id }}/joueur" method="post">
                @csrf
                <label for="">Joueurs</label>
                <select class="form-control" name="joueur_id" id="">
                    @foreach ($joueurs as $joueur)
                        @if ($joueur->role_id == 1 && count($att) < $equipe->ATT)
                            <option value="{{ $joueur->id }}">
                                {{ $joueur->nom . ' (' . $joueur->role->nom . ')' }}
                            </option>    
                        @endif                      
                        @if ($joueur->role_id == 2 && count($mil) < $equipe->CT)
                            <option value="{{ $joueur->id }}">
                                {{ $joueur->nom . ' (' . $joueur->role->nom . ')' }}
                            </option>    
                        @endif                      
                        @if ($joueur->role_id == 3 && count($def) < $equipe->DC)
                            <option value="{{ $joueur->id }}">
                                {{ $joueur->nom . ' (' . $joueur->role->nom . ')' }}
                            </option>    
                        @endif                      
                        @if ($joueur->role_id == 4 && count($rem) < $equipe->RP)
                            <option value="{{ $joueur->id }}">
                                {{ $joueur->nom . ' (' . $joueur->role->nom . ')' }}
                            </option>    
                        @endif                      
                    @endforeach
                </select>
                @if (count($equipe->joueurs) < $equipe->max)
                    <button type="submit" class="btn btn-primary">
                        Ajoutez
                    </button>
                @endif
                
            </form>

        </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a href={{ route("equipes.index") }} class="btn btn-danger text-white mx-auto">Revenir en arrière</a>
        </div>
@endsection