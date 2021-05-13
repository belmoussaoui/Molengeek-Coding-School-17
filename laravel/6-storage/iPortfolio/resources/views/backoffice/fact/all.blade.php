@extends('layouts.app')

@section('content')
    @include('backoffice.header', ['page' => 'fact'])
    
    <main id="main">
        <section id="about" class="about">
        <div class="container">

            <div class="section-title">
            <h2>Facts</h2>
            </div>

            <a class="btn btn-success mb-3" href="/fact/create">Create</a>
            
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Number</th>
                    <th scope="col">Sentence</th>
                    <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($facts as $fact)
                    
                    <tr>
                        <th scope="row">{{ $fact->id }}</th>
                        <td><i class="{{ $fact->icon }}"></i></td>
                        <td>{{ $fact->number }}</td>
                        <td>{!! $fact->sentence !!}</td>
                        <td>
                            <div class="d-flex">
                                <a href="/fact/{{ $fact->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                                <form class="mx-1" action="/fact/{{ $fact->id }}/delete" method="post">
                                    @csrf
                                    <button class="btn btn-danger mx-1" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        </section><!-- End About Section -->
    </main>
@endsection