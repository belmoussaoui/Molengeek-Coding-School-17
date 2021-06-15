@extends('layouts.index')

@section('content')
    @include('backoffice.header')


    <section id="contact" class="contact section-bg vh-100">
        <div class="container aos-init aos-animate my-5" data-aos="fade-up">
            <div class="about p-0">
                <div class="content">
                    <a href={{ route('section.index') }} class="btn read-more px-2 py-1">Back</a>
                </div>
            </div>

            <div class="container aos-init aos-animate my-5 p-5" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ $section->title }}</h2>
                    <p>{{ $section->description }}</p>
                </div>

            </div>

        </div>
        

    </section>




    

@endsection