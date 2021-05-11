@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">Image</h2>
    <a class="btn btn-success my-2" href="/image/create">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Path</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($images as $image)
            <tr>
            <th scope="row">{{ $image->id }}</th>
                <td>{{ $image->nom }}</td>
                <td><img style="width: 30%" src="{{ asset("img/" . $image->path) }}" alt=""></td>
                <td>{{ $image->description }}</td>
                <td>
                    <div class="d-flex">
                        <a class="mx-1 btn btn-primary text-white" href="/image/{{ $image->id }}/edit">Edit</a>
                        <form class="mx-1" action="/image/{{ $image->id }}/delete" method="post"  enctype="multipart/form-data">
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