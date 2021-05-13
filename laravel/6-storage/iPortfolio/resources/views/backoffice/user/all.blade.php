@extends('layouts.app')

@section('content')
    @include('backoffice.header', ['page' => 'user'])
    
    <main id="main">
        <section id="about" class="about">
        <div class="container">

            <div class="section-title">
            <h2>User</h2>
            </div>

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Website</th>
                    <th scope="col">Phone</th>
                    <th scope="col">City</th>
                    <th scope="col">Age</th>
                    <th scope="col">Degree</th>
                    <th scope="col">phEmailone</th>
                    <th scope="col">Freelance</th>
                    <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->birthday }}</td>
                        <td>{{ $user->website }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->city }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->degree }}</td>
                        <td>{{ $user->phEmailone }}</td>
                        <td>{{ $user->freelance ? 'Yes' : 'No' }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="/user/{{ $user->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                                {{-- <a href="/user/{{ $user->id }}/delete" class="btn btn-danger mx-1">Delete</a> --}}
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