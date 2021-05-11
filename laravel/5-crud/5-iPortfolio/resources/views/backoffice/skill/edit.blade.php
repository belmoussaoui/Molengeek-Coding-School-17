@extends('layouts.app')

@section('content')
    @include('backoffice.header', ['page' => 'facts'])
    
    <main id="main">
        <section>
        <div class="container">

            <div class="section-title">
                <h2>Edit Skill</h2>
            </div>

            <form action="/skill/{{ $skill->id }}/update" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Language</label>
                    <input type="text" class="form-control" value="{{ $skill->language }}" name="language">
                </div>
                <div class="mb-3">
                    <label class="form-label">Value</label>
                    <input type="number" min="0" max="100" class="form-control" value="{{ $skill->value }}" name="value">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </section>
    </main>
@endsection