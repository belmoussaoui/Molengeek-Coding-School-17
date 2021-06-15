@extends('layouts.index')

@section('content')
    @include('backoffice.header')

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg" style="height: 100vh">
    <div class="container about p-0 mt-2" data-aos="fade-up">
        <div class="content">
            <a href={{ route('testimonial.index') }} class="btn read-more px-2 py-1">Back</a>
        </div>
    <div class="section-title">
        <h2 class="my-5">Testimonials</h2>
        
    </div>

    <div class="testimonial-item mt-5">
        <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            {{ $testimonial->quotes }}
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
        </p>
        <img src={{ asset("img/testimonials/$testimonial->image") }} class="testimonial-img" alt="">
        <h3>{{ $testimonial->auteur }}</h3>
        <h4>{{ $testimonial->job }}</h4>
        </div>
    </div>
</section><!-- End Testimonials Section -->
@endsection