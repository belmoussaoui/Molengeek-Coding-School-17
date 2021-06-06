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
                    <div class="row col-lg-5 order-1 order-lg-2 align-items-center" data-aos="zoom-in" data-aos-delay="150">
                        <img src={{asset("img/edit.svg")}} class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                    <a href={{ route('section.index') }} class="btn read-more px-2 py-1">Back</a>
                    <div class="section-title">
                        <h2 style="back">Section Edit </h2>
                    </div>
                        
                        <form action={{ route('section.update', $section) }} method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$section->title}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description" rows="3">{{$section->description}}</textarea>
                            </div>
                            <button type="submit" class="btn read-more">Submit</button>
                        </form>
                    </div>
                </div>
      
            </div>
          </section>
@endsection