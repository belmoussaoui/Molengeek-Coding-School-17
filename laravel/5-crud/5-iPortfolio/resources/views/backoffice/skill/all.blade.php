@extends('layouts.app')

@section('content')
    @include('backoffice.header', ['page' => 'skill'])
    
    <main id="main">
        <section id="about" class="about">
        <div class="container">

            <div class="section-title">
            <h2>Skills</h2>
            </div>

            <a class="btn btn-success mb-3" href="/skill/create">Create</a>
            
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Language</th>
                    <th scope="col">Value</th>
                    <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $skill)
                    
                    <tr>
                        <th scope="row">{{ $skill->id }}</th>
                        <td>{{ $skill->language }}</td>
                        <td>{{ $skill->value }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="/skill/{{ $skill->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                                <form class="mx-1" action="/skill/{{ $skill->id }}/delete" method="post">
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