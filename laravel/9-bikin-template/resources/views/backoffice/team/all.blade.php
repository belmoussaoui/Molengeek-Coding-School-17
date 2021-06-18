@extends('backoffice.index')

@section('content')
<!-- ======= Hero Section ======= -->
<header id="header" class="fixed-top bg-transparent border-0">
    <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.html">Team Section</a></h1>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="getstarted mx-2" href="{{ route('team.edit', $team) }}">Edit</a></li>
            {{-- <li><a class="getstarted ms-2" href="/login">Log In</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- ======= Team Section ======= -->
<section id="team" class="team">
<div class="container" data-aos="fade-up">

    <div class="section-title">
    <h2>{{ $team->section->title }}</h2>
    <p>{{ $team->section->text }}</p>
    </div>

    <div class="row">

    @foreach ($team->users as $user)
        
    
    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
            <img src={{ asset("img/team/" . $user->member->image) }} class="img-fluid" alt="">
            <div class="member-info">
                <div class="member-info-content">
                    <h4>{{ $user->name }}</h4>
                    <span>{{ $user->member->job }}</span>
                </div>
                <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div><div class="navbar d-flex justify-content-center mt-3">
        <a class="mx-1 getstarted" href="{{ route('member.edit', $user->member) }}">Edit</a>
        {{-- <form action={{ route('member.destroy', $user->member) }} method="post">
            @csrf
            @method('delete')
            <a href="" onclick="event.preventDefault(); this.closest('form').submit();" class="mx-1 getstarted">Delete</a>
        </form> --}}
    </div>
    </div>
    
    
    @endforeach
    </div>

</div>
</section><!-- End Team Section -->

@endsection