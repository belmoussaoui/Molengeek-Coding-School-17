@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">Créer un utilisateur avec profil</h1>
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="nickname" value="{{ $user->nickname }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="name" value="{{ $user->profil->name }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="number" class="form-control" name="age" value="{{ $user->profil->age }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Téléphone</label>
            <input type="tel" class="form-control" name="phone" value="{{ $user->profil->phone }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection