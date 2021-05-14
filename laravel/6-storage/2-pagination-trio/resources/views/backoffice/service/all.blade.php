@extends('layout.app')

@section('content')
    @include('partial.nav')
        
    <section class="container mr-5">
        
        <h1 class="text-center my-3">tableau des Services</h1>
        
        <a class="btn btn-secondary text-white my-2" href="/service/create">Create</a>
        
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">icone</th>
                <th scope="col">titre</th>
                <th scope="col">description</th>
                <th scope="col">actions</th>
              </tr>
            </thead>
            <tbody class="col-6">
                @foreach ($services as $service)
                    <tr>
                        <th scope="row">{{ $service->id }}</th>
                        <td><i class="fas fa-2x	{{ $service->icone }}"></i></td>
                        <td>{{ $service->titre }}</td>
                        <td>{{ $service->description }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/service/{{ $service->id }}/edit">Edit</a>
                            <form action="/service/{{ $service->id }}/delete" method="POST">
                                @csrf
                                <button class="btn btn-danger text-white mx-2" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $services->links() }}
        </div>
           
    </section>

    @include('partial.footer')
@endsection