@extends('layouts.app')

@section('content')
    @include('backoffice.header', ['page' => 'portfolio'])
    
    <main id="main">
        <section id="about" class="about">
        <div class="container">

            <div class="section-title">
            <h2>Portfolios</h2>
            </div>

            <a class="btn btn-success mb-3" href="/portfolio/create">Create</a>
            
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col" >Category</th>
                    <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portfolios as $portfolio)
                    
                    <tr>
                        <th scope="row">{{ $portfolio->id }}</th>
                        <td>
                            <div class="w-25">
                                <img src="/img/portfolio/{{ $portfolio->image }}" class="img-fluid" alt="">
                            </div>
                        </td>
                        <td>{{ $portfolio->category }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="/portfolio/{{ $portfolio->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                                <form class="mx-1" action="/portfolio/{{ $portfolio->id }}/delete" method="post">
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