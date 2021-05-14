@extends('layout.app')

@section('content')
    @include('partial.nav')
        
    <section class="container mr-5">
        
        <h1 class="text-center my-3">tableau des caracteristiques</h1>
        
        <a class="btn btn-secondary text-white my-2" href="/caracteristique/create">Create</a>
        
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
                <th scope="col">chiffre</th>
                <th scope="col">nom</th>
                <th scope="col">actions</th>
              </tr>
            </thead>
            <tbody class="col-6">
                @foreach ($caracteristiques as $caracteristique)
                    <tr>
                        <th scope="row">{{ $caracteristique->id }}</th>
                        <td><i class="fas fa-2x	{{ $caracteristique->icone }}"></i></td>
                        <td>{{ $caracteristique->chiffre }}</td>
                        <td>{{ $caracteristique->nom }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/caracteristique/{{ $caracteristique->id }}/edit">Edit</a>
                            <form action="/caracteristique/{{ $caracteristique->id }}/delete" method="POST">
                                @csrf
                                <button class="btn btn-danger text-white mx-2" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>{{ $caracteristiques->links() }}</div>   
    </section>

    @include('partial.footer')
@endsection