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
                <h3 class="mb-0 py-2">Portfolios</h3>
            </div>
            <div class="col-4 text-right">
                <a href={{ route("portfolios.create") }} class="py-3 btn btn-sm btn-primary">Add Portfolio</a>
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
                    <th scope="col">categorie</th>
                    <th scope="col">description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portfolios as $portfolio)
                <tr>
                    <th scope="row">{{ $portfolio->id }}</th>
                    <td><a href="/portfolios/{{ $portfolio->id }}">{{ $portfolio->nom}}</a></td>
                    <td><img style="width : 200px" src={{ asset('img/'. $portfolio->image) }} alt=""></td>
                    <td>{{ $portfolio->categorie }}</td>
                    <td>{{ $portfolio->description }}</td>
                    
                    <td>
                        <div class="d-flex ">
                            <a href="/portfolios/{{ $portfolio->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                            <form action="/portfolios/{{ $portfolio->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger mx-1 " type="submit">Delete</button>
                            </form>
                            <form action="/portfolios/{{ $portfolio->id }}/download" method="POST">
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
            {{ $portfolios->links() }} 
        </nav>
    </div>
</div>
@endsection