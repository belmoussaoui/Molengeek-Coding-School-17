
@extends('layouts.app')

@section('content')
    @include('backoffice.header', ['page' => 'service'])
    
    <main id="main">
        <section>
        <div class="container">

            <div class="section-title">
                <h2>Create Service</h2>
            </div>

            <form action="/service/store" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Logo</label>
                    <input type="text" class="form-control" name="logo">
                </div>
                <div class="mb-3">
                    <label class="form-label">title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label class="form-label">Text</label>
                    <input type="text" class="form-control" name="text">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </section>
    </main>
@endsection