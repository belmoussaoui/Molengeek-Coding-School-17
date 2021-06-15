@extends('layouts.index')

@section('content')
    @include('backoffice.header')

    
    <section id="hero" class="d-flex flex-column">
    @if (session('message'))
              <div class="container pt-3">
                  <div  class="alert alert-success">
                      {{ session('message') }}
                  </div>
              </div>
          @endif
        <div class="me-5 pe-5 text-end">
                <a href={{ route('hero.edit',$hero)  }} class="btn-get-started scrollto">Edit</a>
        </div>

        <div class="container-fluid p-0" data-aos="fade-up">
            <div class="row justify-content-center">
                <h1 class="text-center">Hero</h1>
                <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>{{ $hero->title }}</h1>
                    <h2>{{ $hero->description }}</h2>
                    <div><a href="#" class="btn-get-started scrollto">{{ $hero->button }}</a></div>
                    </div>
                    <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="img/{{ $hero->image }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
@endsection