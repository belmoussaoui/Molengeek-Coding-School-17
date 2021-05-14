@extends('layout.app')

@section('content')
    @include('partial.nav')
        
    <section class="container mr-5">
        
        <h1 class="text-center my-3">tableau de Galerie</h1>
        <div class="d-flex justify-content-center">
            <img class="w-75  my-3 " src="{{ asset("img/" . $galerie->image) }}" alt="">
        </div>
        
    </section>

    @include('partial.footer')
@endsection