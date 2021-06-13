@extends('layouts.index')

@section('content')
    @include('backoffice.header ')

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
                    <a href={{ route('service.index') }} class="btn read-more px-2 py-1">Back</a>
                    <div class="section-title">
                        <h2 style="back">service Edit </h2>
                    </div>
                        
                        <form action={{ route('service.update', $service) }} method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Icon</label>
                                {{-- <input type="text" class="form-control" name="icon" value={{$service->icon}}> --}}
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="icon" value="bxl-dribbble" {{ $service->icon === 'bxl-dribbble' ? 'checked' : null }}>
                                        <label class="form-check-label"><i class="fs-3 bx bxl-dribbble"></i></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="icon" value="bx-file" {{ $service->icon === 'bx-file' ? 'checked' : null }}>
                                        <label class="form-check-label"><i class="fs-3 bx bx-file"></i></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="icon" value="bx-tachometer" {{ $service->icon === 'bx-tachometer' ? 'checked' : null }}>
                                        <label class="form-check-label"><i class="fs-3 bx bx-tachometer"></i></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="icon" value="bx-layer" {{ $service->icon === 'bx-layer' ? 'checked' : null }}>
                                        <label class="form-check-label"><i class="fs-3 bx bx-layer"></i></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="icon" value="bx-slideshow" {{ $service->icon === 'bx-slideshow' ? 'checked' : null }}>
                                        <label class="form-check-label"><i class="fs-3 bx bx-slideshow"></i></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="icon" value="bx-arch" {{ $service->icon === 'bx-arch' ? 'checked' : null }}>
                                        <label class="form-check-label"><i class="fs-3 bx bx-arch"></i></label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$service->title}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <input type="text" class="form-control" name="description" value="{{$service->description}}">
                            </div>
                            <button type="submit" class="btn read-more">Submit</button>
                        </form>
                    </div>
                </div>
      
            </div>
          </section>
@endsection