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
                            <h2 style="back">Counter Create</h2>
                        </div>
                            
                        <form action={{ route('counter.store') }} method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Number</label>
                                <input type="number" class="form-control" name="number">
                            </div>
                            <button type="submit" class="btn read-more">Submit</button>
                        </form>
                    </div>
                </div>
      
            </div>
          </section><!-- End About Section -->
@endsection