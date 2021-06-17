@extends('backoffice.index')

@section('content')
<!-- ======= Hero Section ======= -->
<header id="header" class="fixed-top bg-transparent border-0">
    <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.html">Portfolio Section</a></h1>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="getstarted mx-2" href="{{ route('cards.create', $portfolio) }}">Add Card</a></li>
            <li><a class="getstarted mx-2" href="{{ route('portfolio.edit', $portfolio) }}">Edit</a></li>
            {{-- <li><a class="getstarted ms-2" href="/login">Log In</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio mt-4">
<div class="container" data-aos="fade-up">

    <div class="section-title">
    <h2>Portfolio</h2>
    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
            </ul>
        </div>
    </div>

    <div class="row portfolio-container">

    @foreach ($portfolio->cards as $key => $card)
        <div class="{{ "col-lg-4 col-md-6 portfolio-item filter-$card->category" }}">
            <div class="portfolio-wrap">
                <img src={{ asset("img/portfolio/$card->image") }} class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>{{ "$card->category $key" }}</h4>
                    <p>{{ $card->category }}</p>
                    <div class="portfolio-links">
                        <a href={{ asset("img/portfolio/$card->image") }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="navbar d-flex justify-content-center mt-3">
                <a class="mx-1 getstarted" href="{{ route('cards.edit', $card) }}">Edit</a>
                <form action={{ route('cards.destroy', $card) }} method="post">
                    @csrf
                    @method('delete')
                    <a href="" onclick="event.preventDefault(); this.closest('form').submit();" class="mx-1 getstarted">Delete</a>
                </form>
            </div>
        </div>
        
    @endforeach

    </div>

</div>
</section><!-- End Portfolio Section -->
@endsection