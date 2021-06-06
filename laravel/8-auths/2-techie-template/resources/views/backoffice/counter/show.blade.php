@extends('layouts.index')

@section('content')
    @include('backoffice.header')


    <section id="contact" class="contact section-bg vh-100">
        <div class="container aos-init aos-animate my-5" data-aos="fade-up">
            <div class="about p-0">
                <div class="content">
                    <a href={{ route('counter.index') }} class="btn read-more px-2 py-1">Back</a>
                </div>
            </div>

            <div class="section-title">
                <h2>Counter</h2>
            </div>

            <div id="counts" class="counts my-5">

            {{-- <div class="section-title">
                <h2 class="text-white">Display</h2>
            </div> --}}
                <div class="">
    
                    <div class="row counters">
    
                        <div class="col-lg-12 col-12 text-center">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="0" class="purecounter">232</span>
                            <p>Clients</p>
                        </div>
    
                    </div>
  
                </div>
            </div>

        </div>
        

    </section>




    

@endsection