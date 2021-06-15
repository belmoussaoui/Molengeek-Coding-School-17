@extends('layouts.index')

@section('content')
    @include('partials.header')
    @include('partials.hero')
    <main id="main">
        @include('partials.about')
        @include('partials.features')
        @include('partials.services')
        @include('partials.portfolio')
        @include('partials.testimonials')
        @include('partials.team')
        @include('partials.contact')
    </main>
    @include('partials.footer')

@endsection