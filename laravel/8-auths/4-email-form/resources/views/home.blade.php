@extends('layouts.index')

@section('content')
    @include('partials.header')
    @include('partials.hero')
    <main id="main">
        @include('partials.about')
        @include('partials.counts')
        @include('partials.services')
        @include('partials.testimonials')
        @include('partials.contact')
    </main>
    @include('partials.footer')
@endsection