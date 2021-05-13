@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">Users</h2>
    <a class="btn btn-success my-2" href="/users/create">Create</a>
    
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Âge</th>
                <th scope="col">Email</th>
                <th scope="col">Mot de Passe</th>
                <th scope="col">Photo de Profil</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
            <th scope="row">{{ $user->id }}</th>
                <td><a href="/users/{{ $user->id }}/show">{{ $user->nom }}</a></td>
                <td><a href="/users/{{ $user->id }}/show">{{ $user->prenom }}</a></td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->mdp }}</td>
                <td><img style="width: 30%" src="{{ asset("img/" . $user->pdp) }}" alt=""></td>
                <td>
                    <div class="d-flex">
                        <form class="mx-1" action="/users/{{ $user->id }}/download" method="post">
                            @csrf
                            <button class="btn btn-warning" type="submit">Download</button>
                        </form>
                        <a class="mx-1 btn btn-primary text-white" href="/users/{{ $user->id }}/edit">Edit</a>
                        <form class="mx-1" action="/users/{{ $user->id }}/delete" method="post"  enctype="multipart/form-data">
                            @csrf
                            <button class="btn btn-danger text-white" type="submit">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
            @endforeach
        </tbody>
    </table>
    
@endsection