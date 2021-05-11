@extends('layouts.app')

@section('content')
    
    @extends('layouts.header')
    
    @section('navlist')
        <li class="active"><a href="#about"><i class="bx bx-user"></i> <span>User</span></a></li>
        <li><a href="#about"><i class="bx bx-pencil"></i> <span>Facts</span></a></li>
        <li><a href="#about"><i class="bx bx-box"></i> <span>Skills</span></a></li>
        <li><a href="#about"><i class="bx bx-sidebar"></i> <span>Portfolio</span></a></li>
        <li><a href="#about"><i class="bx bx-shopping-bag"></i> <span>Services</span></a></li>
        <li><a href="#about"><i class="bx bx-mail-send"></i> <span>Contact</span></a></li>
        <hr class="text-white bg-white">
        <li><a href="/"><i class="bx bx-home"></i> <span>Home</span></a></li>
    @endsection
    
    <main id="main">
        <section>
        <div class="container">

            <div class="section-title">
                <h2>Edit User</h2>
            </div>

            <form action="/user/{{ $user->id }}/update" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Birthday</label>
                    <input type="text" class="form-control" value="{{ $user->birthday }}" name="birthday">
                </div>
                <div class="mb-3">
                    <label class="form-label">Website</label>
                    <input type="text" class="form-control" value="{{ $user->website }}" name="website">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="tel" class="form-control" value="{{ $user->phone }}" name="phone">
                </div>
                <div class="mb-3">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control" value="{{ $user->city }}" name="city">
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" class="form-control" value="{{ $user->age }}" name="age">
                </div>
                <div class="mb-3">
                    <label class="form-label">Degree</label>
                    <input type="text" class="form-control" value="{{ $user->degree }}" name="degree">
                </div>
                <div class="mb-3">
                    <label class="form-label">phEmailone</label>
                    <input type="email" class="form-control" value="{{ $user->phEmailone }}" name="phEmailone">
                </div>
                <div class="mb-3 form-check">
                
                    <input class="form-check-input" type="checkbox" {{ $user->freelance ? "checked" : null }} name="freelance">
                    <label class="form-check-label">Freelance</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </section>
    </main>
@endsection