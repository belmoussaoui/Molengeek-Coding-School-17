@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">Edit User</h2>
    <form action="/user/{{ $user->id }}/update" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" value="{{ $user->nom }}" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Prenom</label>
            <input type="text" class="form-control" value="{{ $user->prenom }}" name="prenom">
        </div>
        <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="number" class="form-control" value="{{ $user->age }}" name="age">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" value="{{ $user->email }}" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Photo</label>
            <input type="text" class="form-control" value="{{ $user->photo }}" name="photo">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection