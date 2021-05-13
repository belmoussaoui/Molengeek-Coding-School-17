@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">Create Album</h2>
    <ul class="bg-danger rounded">
    
    @foreach ($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    
    </ul>
    <form action="/users/{{ $user->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input value="{{ $user->nom }}" type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Prenom</label>
            <input value="{{ $user->prenom }}" type="text" class="form-control" name="prenom">
        </div>
        <div class="mb-3">
            <label class="form-label">Age</label>
            <input value="{{ $user->age }}" type="number" class="form-control" name="age">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input value="{{ $user->email }}" type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Mot de Passe</label>
            <input value="{{ $user->mdp }}" type="password" class="form-control" name="mdp">
        </div>
        <div class="mb-3">
            <label class="form-label">Photo de Profil</label>
            <input value="{{ $user->pdp }}" type="file" class="form-control" name="pdp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection