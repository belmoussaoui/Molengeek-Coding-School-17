@extends('layouts.app')

@section('content')
    
    @include('backoffice.header', ['page' => 'user'])
    
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
                    <input type="date" class="form-control" value="{{ $user->birthday }}" name="birthday">
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