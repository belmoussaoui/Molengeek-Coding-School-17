@extends('layouts.app')
@section('content')

    <ul class="bg-danger rounded">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    <h2 class="text-center text-decoration-underline my-3">Editer un joueur</h2>
    <form action="{{ route('joueurs.update', $joueur) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input value="{{ $joueur->nom }}"type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">prenom</label>
            <input value="{{ $joueur->prenom }}"type="text" class="form-control" name="prenom">
        </div>
        <div class="mb-3">
            <label class="form-label">age</label>
            <input value="{{ $joueur->age }}"type="text" class="form-control" name="age">
        </div>
        <div class="mb-3">
            <label class="form-label">numero</label>
             <input value="{{ $joueur->numero }}"type="number" class="form-control" name="numero">
        </div>
        <div class="mb-3">
            <label class="form-label">pays</label>
            <input value="{{ $joueur->pays }}"type="text" class="form-control" name="pays">
        </div>
        <div class="mb-3">
            <label class="form-label">Genre</label>
            <select name="genre_id" class="form-control" >
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->type }}</option>
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Role</label>
            <select name="role_id" class="form-control" >
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->nom }}</option>
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Équipe</label>
            <select name="equipe_id" class="form-control" >
                @foreach ($equipes as $equipe)
                    <option value="{{ $equipe->id }}">{{ $equipe->nom }}</option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
       
    </form>
    
@endsection