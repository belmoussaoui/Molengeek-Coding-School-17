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
                    <h3 class="mb-0 py-2">Users</h3>
                </div>
                <div class="col-4 text-right">
                    <a href={{ route("users.create") }} class="py-3 btn btn-sm btn-primary">Add user</a>
                </div>
            </div>
        </div>
                                    

        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr class="bg-light">
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Age</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mot de passe</th>
                        <th scope="col">Photo de profil</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td><a href="/users/{{ $user->id }}">{{ $user->nom}}</a></td>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ substr($user->mdp, 0, 12) . '...' }}</td>
                        <td><img style="width : 200px" src={{ asset('img/'. $user->pdp) }} alt=""></td>
                        <td>
                            <div class="d-flex ">
                                <a href="/users/{{ $user->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                                <form action="/users/{{ $user->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger mx-1 " type="submit">Delete</button>
                                </form>
                                <form action="/users/{{ $user->id }}/download" method="POST">
                                    @csrf
                                    <button class="btn btn-warning mx-1" type="submit">Download</button>
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
                {{ $users->links() }} 
            </nav>
        </div>
    </div>

   
@endsection