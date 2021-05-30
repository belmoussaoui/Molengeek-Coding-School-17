@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">Utilisateurs</h1>
        <a href={{ route('users.create') }} class="btn btn-success text-white">Créer</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Pseudo</th>
                <th scope="col">Email</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Phone</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->nickname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->profil->name }}</td>
                    <td>{{ $user->profil->age }}</td>
                    <td>{{ $user->profil->phone }}</td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-primary text-white mx-2" href="{{ route('users.edit', $user->id) }}">Editer</a>
                            <form action={{ route('users.destroy', $user->id) }} method="post">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger text-white mx-2" type="submit">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection