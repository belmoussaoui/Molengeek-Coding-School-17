@extends('layouts.app')

@section('content')
    @include('backoffice.header', ['page' => 'service'])
    
    <main id="main">
        <section id="about" class="about">
        <div class="container">

            <div class="section-title">
            <h2>Services</h2>
            </div>

            <a class="btn btn-success mb-3" href="/service/create">Create</a>
            
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Title</th>
                    <th scope="col">Text</th>
                    <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                    
                    <tr>
                        <th scope="row">{{ $service->id }}</th>
                        <td><i class="{{ $service->logo }}"></i></td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->text }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="/service/{{ $service->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                                <form class="mx-1" action="/service/{{ $service->id }}/delete" method="post">
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