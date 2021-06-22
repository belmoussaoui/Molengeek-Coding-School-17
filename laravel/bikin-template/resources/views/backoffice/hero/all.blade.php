@extends('backoffice.index')

@section('content')
<!-- ======= Hero Section ======= -->
<header id="header" class="fixed-top bg-transparent border-0">
    <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.html">Hero Section</a></h1>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="getstarted mx-2" href="{{ route('hero.edit', $hero) }}">Edit</a></li>
            {{-- <li><a class="getstarted ms-2" href="/login">Log In</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<section id="hero" class="d-flex align-items-center">
    
    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
    <h1>{{ $hero->section->title }}</h1>
    <h2>{{ $hero->section->text }}</h2>
    <a href="#about" class="btn-get-started scrollto">{{ $hero->button }}</a>
    <img src={{ asset("img/$hero->image") }} class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>

</section><!-- End Hero -->
@endsection