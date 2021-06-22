@extends('backoffice.index')

@section('content')
<!-- ======= Hero Section ======= -->
<header id="header" class="fixed-top bg-transparent border-0">
    <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.html">Features Section</a></h1>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="getstarted mx-2" href="{{ route('features.edit', $feature) }}">Edit</a></li>
            {{-- <li><a class="getstarted ms-2" href="/login">Log In</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<section id="features" class="features mt-5" data-aos="fade-up">
<div class="container">
    <div class="section-title">
    <h2>{{ $feature->section->title }}</h2>
    <p>{{ $feature->section->text }}</p>
    </div>
    @foreach ($feature->featureItems as $key => $feature)
    <div class="row content mt-5">
    @if ($key % 2 === 0)
        <div class="col-md-5" data-aos="" data-aos-delay="">
            <img src={{ asset("img/$feature->image") }} class="img-fluid" alt="">
        </div>
    @endif
        <div class="col-md-7 pt-4" data-aos="" data-aos-delay="">
            <h3>{{ $feature->title }}</h3>
            <p class="fst-italic">{{ $feature->description }}</p>
            <ul class="text-left">
            @if ($feature->check1)
                <li><i class="bi bi-check"></i>{{ $feature->check1 }}</li>
            @endif
            @if ($feature->check2)
                <li><i class="bi bi-check"></i>{{ $feature->check2 }}</li>  
            @endif
            @if ($feature->check3)
                <li><i class="bi bi-check"></i>{{ $feature->check3 }}</li>
            @endif
            </ul>
            @if ($feature->text)
                <p>{{ $feature->text }}</p>
            @endif
        </div>
    @if ($key % 2 === 1)
        <div class="col-md-5" data-aos="" data-aos-delay="">
            <img src={{ asset("img/$feature->image") }} class="img-fluid" alt="">
        </div>
    @endif
        <div class="navbar d-flex justify-content-center mt-3">
            <a class="mx-1 getstarted" href="{{ route('feature-items.edit', $feature) }}">Edit</a>
            <form action={{ route('feature-items.destroy', $feature) }} method="post">
                @csrf
                @method('delete')
                {{-- <a href="" onclick="event.preventDefault(); this.closest('form').submit();" class="mx-1 getstarted">Delete</a> --}}
            </form>
        </div>
    @endforeach
    </div>
</div>
</section>
@endsection