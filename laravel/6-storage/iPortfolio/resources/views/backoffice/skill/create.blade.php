@extends('layouts.app')

@section('content')
    @include('backoffice.header', ['page' => 'skill'])
    
    <main id="main">
        <section>
        <div class="container">

            <div class="section-title">
                <h2>Create Skill</h2>
            </div>

            <form action="/fact/store" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Language</label>
                    <input type="text" class="form-control" name="icon">
                </div>
                <div class="mb-3">
                    <label class="form-label">Value</label>
                    <input type="number" min="0" max="100" class="form-control" name="number">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </section>
    </main>
@endsection