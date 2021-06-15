@extends('layouts.index')

@section('content')
    @include('backoffice.header')

    <section id="hero" class="d-flex align-items-center">
      <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
              @if (session('message'))
                  <div class="container pt-3">
                      <div class="alert alert-danger">
                          {{ session('message') }}
                      </div>
                  </div>
              @endif
              <h1>Welcome to the Dashboard !</h1>
              {{-- <h2>{{ $hero->description }}</h2> --}}
              {{-- <div><a href="#about" class="btn-get-started scrollto">{{ $hero->button }}</a></div> --}}
            </div>
            <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
              <img src="img/dashboard.svg" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>
    
      </section><!-- End Hero -->

@endsection