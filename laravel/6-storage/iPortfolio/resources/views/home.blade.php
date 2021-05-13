@extends('layouts.app')

@section('content')
        
    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    @include('partials.header')
    
    @include('partials.hero')
    
    <main id="main">

        @include('partials.about')
        @include('partials.facts')
        @include('partials.skills')
        @include('partials.portfolio')
        @include('partials.services')
        @include('partials.contact')
        
    </main><!-- End #main -->
    @include('partials.footer')

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
@endsection