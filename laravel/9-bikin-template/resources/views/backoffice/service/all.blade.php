@extends('backoffice.index')

@section('content')
<!-- ======= Hero Section ======= -->
<header id="header" class="fixed-top bg-transparent border-0">
    <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.html">Services Section</a></h1>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="getstarted mx-2" href="{{ route('services.edit', $service) }}">Edit</a></li>
            {{-- <li><a class="getstarted ms-2" href="/login">Log In</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- ======= Services Section ======= -->
<section id="services" class="services bg-transparent">
    <div class="container" data-aos="fade-up">
        
        <div class="section-title mt-5">
            <h2 class="text-theme">{{ $service->section->title }}</h2>
            <p class="text-theme">{{ $service->section->text }}</p>
        </div>
        
        <div class="row">
            @foreach ($service->serviceItems as $item)
            <div class="col-md-6 col-lg-3 align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box bg-clear">
                    <div class="icon"><i class="bx {{ $item->icon }}"></i></div>
                    <h4 class="title"><a href="">{{ $item->title }}</a></h4>
                    <p class="description">{{ $item->description }}</p>
                </div>
                <div class="navbar d-flex justify-content-center mt-3">
                    <a class="mx-1 getstarted" href="{{ route('service-items.edit', $item) }}">Edit</a>
                    <form action={{ route('service-items.destroy', $item) }} method="post">
                        @csrf
                        @method('delete')
                        {{-- <a href="" onclick="event.preventDefault(); this.closest('form').submit();" class="mx-1 getstarted">Delete</a> --}}
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    
</div>
</section>

@endsection