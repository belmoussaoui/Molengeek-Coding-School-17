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
                    <a href={{ route('counter.index') }} class="btn read-more px-2 py-1">Back</a>
                    <div class="section-title">
                        <h2 style="back">Counter Edit </h2>
                    </div>
                        
                        <form action={{ route('counter.update', $counter) }} method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value={{$counter->title}}>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Number</label>
                                <input type="number" class="form-control" name="number" value={{$counter->number}}>
                            </div>
                            <button type="submit" class="btn read-more">Submit</button>
                        </form>
                    </div>
                </div>
      
            </div>
          </section><!-- End About Section -->
@endsection