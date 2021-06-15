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
                    <div class="col-lg-5 order-2 order-lg-1 content" data-aos="zoom-in" data-aos-delay="150">
                        <a href={{ route('counter.index') }} class="btn read-more px-2 py-1">Back</a>
                        <img src={{asset("img/createTechie.svg")}} class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <div class="section-title">
                            <h2 style="back">Service Create</h2>
                        </div>
                            
                          
                        <form action={{ route('service.store') }} method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Icon</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="icon" value="bxl-dribbble" checked>
                                        <label class="form-check-label"><i class="fs-3 bx bxl-dribbble"></i></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="icon" value="bx-file">
                                        <label class="form-check-label"><i class="fs-3 bx bx-file"></i></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="icon" value="bx-tachometer">
                                        <label class="form-check-label"><i class="fs-3 bx bx-tachometer"></i></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="icon" value="bx-layer">
                                        <label class="form-check-label"><i class="fs-3 bx bx-layer"></i></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="icon" value="bx-slideshow">
                                        <label class="form-check-label"><i class="fs-3 bx bx-slideshow"></i></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="icon" value="bx-arch">
                                        <label class="form-check-label"><i class="fs-3 bx bx-arch"></i></label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <input type="text" class="form-control" name="description">
                            </div>
                            <button type="submit" class="btn read-more">Submit</button>
                        </form>
                    </div>
                </div>
      
            </div>
          </section>
@endsection