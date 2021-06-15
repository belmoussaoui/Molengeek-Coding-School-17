@extends('layouts.index')

@section('content')
    @include('backoffice.header')

    <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid" data-aos="fade-up">
             @if (session('message'))
               <div class="container p-0">
                   <div  class="alert alert-success">
                       {{ session('message') }}
                   </div>
               </div>
           @endif
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <div class="text-center">
                        <h1>Testimonials</h1>
                            <a class="m-0 py-1 px-2 btn-get-started mt-3 text-end mx-1" href="{{ route('testimonial.create') }}">+</a>    
                    </div>
                    <table class="table text-light mt-5">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Auteur</th>
                            <th scope="col">Quotes</th>
                            <th scope="col">Job</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials as $testimonial)
                                <tr>
                                    <th scope="row">{{ $testimonial->id }}</th>
                                    <td><a class="text-white text-decoration-underline" href="{{ route('testimonial.show', $testimonial) }}">{{ $testimonial->auteur}}</a></td>
                                    <td>{{ $testimonial->quotes}}</td>
                                    <td>{{ $testimonial->job}}</td>
                                    <td>
                                        <div class="d-flex">
                                                <a class="m-0 py-1 px-2 btn-get-started mx-1" href="{{ route('testimonial.edit', $testimonial) }}">Edit</a>
                                                <form action={{ route('testimonial.destroy', $testimonial) }} method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn-get-started btn m-0 mx-1 py-1 px-2">delete</button>
                                                </form>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>{{ $testimonials->links() }}</div>
          
                </div>
                
            </div>        
        </div>

  </section><!-- End Hero -->
    
@endsection
