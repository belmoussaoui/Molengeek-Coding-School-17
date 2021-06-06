@extends('layouts.index')

@section('content')
    @include('backoffice.header')

    {{-- <section id="hero" class="d-flex align-items-center"> --}}
        
    <section id="about" class="about">
        @if (session('message'))
            <div class="container">
                <div  class="alert alert-success">
                    {{ session('message') }}
                </div>
            </div>
        @endif
        <div class="text-center my-5">
            <h1 class="text-bold" style="margin: 0; font-size: 52px; font-weight: 700; line-height: 64px;">About</h1>
            <a class="m-0 py-1 px-2 btn-get-started mt-3 text-end mx-1" href="{{ route('about.edit', $about) }}"
            style="
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
                font-size: 16px;
                letter-spacing: 1px;
                display: inline-block;
                padding: 10px 28px;
                border-radius: 5px;
                transition: 0.5s;
                margin-top: 30px;
                color: #000;
                border: 2px solid #000;"
            >Edit</a>

        </div>
        <div class="container w-75">
  
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ asset("img/" . $about->image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                    <h3>{{ $about->title }}</h3>
                    <p class="fst-italic">
                        {{ $about->description }}
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> {{ $about->fact1 }}</li>
                        <li><i class="bi bi-check-circle"></i> {{ $about->fact2 }}</li>
                        <li><i class="bi bi-check-circle"></i> {{ $about->fact3 }}</li>
                    </ul>
                    <a href="#" class="read-more">{{ $about->button }} <i class="bi bi-long-arrow-right"></i></a>
                </div>
            </div>
  
        </div>
      {{-- </section><!-- End About Section --> --}}

    </section>
    
@endsection
