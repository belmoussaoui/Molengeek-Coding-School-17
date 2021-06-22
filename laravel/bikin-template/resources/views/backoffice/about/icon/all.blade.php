@extends('backoffice.index')

@section('content')
<!-- ======= Hero Section ======= -->
<header id="header" class="fixed-top bg-transparent border-0">
    <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.html">About Icons</a></h1>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="getstarted mx-2" href="{{ route('icons.create') }}">Add</a></li>
            <li><a class="getstarted mx-2" href="{{ route('about.index') }}">Back</a></li>
            {{-- <li><a class="getstarted ms-2" href="/login">Log In</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- ======= About Section ======= -->
<section id="about" class="about bg-transparent text-theme mt-5">
<div class="container">

    <div class="row no-gutters">
    <div class="col-xl-12 d-flex align-items-stretch" data-aos="fade-left">
        <div class="icon-boxes d-flex flex-column justify-content-center">
        <div class="row">
            @foreach ($icons as $icon)
                <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="100">
                <p>#{{ $icon->id }}</p>
                <i class="bx {{ $icon->icon }}"></i>
                <h4>{{ $icon->title }}</h4>
                <p>{{ $icon->description }}</p>
                <div class="navbar d-flex justify-content-center">
                    <a class="mx-1 getstarted" href="{{ route('icons.edit', $icon) }}">Edit</a>
                    <form action={{ route('icons.destroy', $icon) }} method="post">
                        @csrf
                        @method('delete')
                        <a href="" onclick="event.preventDefault(); this.closest('form').submit();" class="mx-1 getstarted">Delete</a>
                    </form>
                </div>
                </div>
            @endforeach
            
            
        </div>
        </div><!-- End .content-->
    </div>
    </div>

</div>
</section><!-- End About Section -->
@endsection