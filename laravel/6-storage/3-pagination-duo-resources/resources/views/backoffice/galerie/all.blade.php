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
                <h3 class="mb-0 py-2">Galeries</h3>
            </div>
            <div class="col-4 text-right">
                <a href={{ route("galeries.create") }} class="py-3 btn btn-sm btn-primary">Add Galerie</a>
            </div>
        </div>
    </div>
    
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr class="bg-light">
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galeries as $galerie)
                <tr>
                    <th scope="row">{{ $galerie->id }}</th>
                    <td><a href="/galeries/{{ $galerie->id }}">{{ $galerie->nom}}</a></td>
                    <td><img style="width : 200px" src={{ asset('img/'. $galerie->image) }} alt=""></td>
                    <td>{{ $galerie->description }}</td>
                    
                    <td>
                        <div class="d-flex ">
                            <a href="/galeries/{{ $galerie->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                            <form action="/galeries/{{ $galerie->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger mx-1 " type="submit">Delete</button>
                            </form>
                            <form action="/galeries/{{ $galerie->id }}/download" method="POST">
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
            {{ $galeries->links() }} 
        </nav>
    </div>
</div>
@endsection
