@extends('layouts.app')

@section('content')
    @include('backoffice.header', ['page' => 'fact'])
    
    <main id="main">
        <section>
        <div class="container">

            <div class="section-title">
                <h2>Edit Fact</h2>
            </div>

            <form action="/fact/{{ $fact->id }}/update" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Icon</label>
                    <input type="text" class="form-control" value="{{ $fact->icon }}" name="icon">
                </div>
                <div class="mb-3">
                    <label class="form-label">Number</label>
                    <input type="number" class="form-control" value="{{ $fact->number }}" name="number">
                </div>
                <div class="mb-3">
                    <label class="form-label">Sentence</label>
                    <input type="text" class="form-control" value="{{ $fact->sentence }}" name="sentence">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </section>
    </main>
@endsection