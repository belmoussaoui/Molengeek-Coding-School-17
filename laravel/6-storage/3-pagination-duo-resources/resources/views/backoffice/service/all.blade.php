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
                <h3 class="mb-0 py-2">Services</h3>
            </div>
            <div class="col-4 text-right">
                <a href={{ route("services.create") }} class="py-3 btn btn-sm btn-primary">Add Service</a>
            </div>
        </div>
    </div>
    
    
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr class="bg-light">
                    <th scope="col">#</th>
                    <th scope="col">Icone</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                <tr>
                    <th scope="row">{{ $service->id }}</th>
                    <td><a href="/services/{{ $service->id }}"><i class="fas fa-2x {{ $service->icone}}"></i></a></td>
                    <td>{{ $service->titre }}</td>
                    <td>{{ $service->description }}</td>
                    <td>
                        <div class="d-flex ">
                            <a href="/services/{{ $service->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                            <form action="/services/{{ $service->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger mx-1 " type="submit">Delete</button>
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
            {{ $services->links() }} 
        </nav>
    </div>
</div>
@endsection
