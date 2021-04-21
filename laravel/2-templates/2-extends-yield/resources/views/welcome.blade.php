@extends('layouts.app')

@section('content')
    @include('partials.header')

    <main class="mb-5 container text-center bg-grey py-5">
        <h1>Hello CodingSchool</h1>
        <p class="fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum, incidunt.</p>
        <hr>
        <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, deleniti.</p>
        <button class="btn btn-primary text-white">About</button>
    </main>

    @include('partials.footer')
@endsection