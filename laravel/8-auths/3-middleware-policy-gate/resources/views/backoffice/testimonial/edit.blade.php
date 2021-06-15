@extends('layouts.index')

@section('content')
    @include('backoffice.header ')

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row mt-5 pt-5">
                    <div class="col-lg-5 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                        <img src={{asset("img/edit.svg")}} class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <a href={{ route('testimonial.index') }} class="btn read-more px-2 py-1">Back</a>
                        <div class="section-title">
                            <h2 style="back">Testimonials Edit </h2>
                        </div>
                            
                        <form action={{ route('testimonial.update', $testimonial) }} method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Auteur</label>
                                <input type="text" class="form-control" name="auteur" value={{ $testimonial->auteur }}>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quotes</label>
                                <input type="text" class="form-control" name="quotes" value={{ $testimonial->quotes }}>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Job</label>
                                <input type="text" class="form-control" name="job" value={{ $testimonial->job }}>
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="image">
                                <label class="input-group-text">Image</label>
                            </div>
                            <button type="submit" class="btn read-more">Submit</button>
                        </form>
                    </div>
                </div>
      
            </div>
          </section><!-- End About Section -->
@endsection