@extends('layout.app')

@section('content')
    @include('partial.nav')
        
    <section class="container mr-5">
        
        <h1 class="text-center my-3">tableau de Portfolios</h1>
        
        <a class="btn btn-secondary text-white my-2" href="/portfolio/create">Create</a>

        @if (session("message"))
            <div class="alert alert-success">
                {{ session("message") }}
            </div>

        @endif

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">image</th>
                <th scope="col">categorie</th>
                <th scope="col">description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="col-6">
                @foreach ($portfolios as $portfolio)
                    <tr>
                        <th scope="row">{{ $portfolio->id }}</th>
                        <td> <a href="/portfolio/{{ $portfolio->id }}/show">{{ $portfolio->nom }}</a></td>
                        <td class="w-25"><img class="img-thumbnail col-4" src={{ asset("img/" . $portfolio->image) }} alt=""></td>
                        <td>{{ $portfolio->categorie }}</td>
                        <td>{{ $portfolio->description }}</td>
                        <td>
                            <div class="d-flex">
                                <form action="/portfolio/{{ $portfolio->id }}/download" method="POST">
                                    @csrf
                                    <button class="btn btn-warning text-white mx-2" type="submit">Download</button>
                                </form>
                                <a class="btn btn-primary text-white" href="/portfolio/{{ $portfolio->id }}/edit">Edit</a>
                                <form action="/portfolio/{{ $portfolio->id }}/delete" method="POST">
                                    @csrf
                                    <button class="btn btn-danger text-white mx-2" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>{{ $portfolios->links() }}</div>
           
    </section>

    @include('partial.footer')
@endsection