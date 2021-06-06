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
                        <h1>Sections</h1>
                    </div>
                    <table class="table text-light mt-5">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sections as $section)
                                <tr>
                                    <th scope="row">{{ $section->id }}</th>
                                    <td><a class="text-white text-decoration-underline" href="{{ route('section.show', $section) }}">{{ $section->title}}</a></td>
                                    <td>{{ $section->description }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="m-0 py-1 px-2 btn-get-started mx-1" href="{{ route('section.edit', $section) }}">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            
                           
                        </tbody>
                    </table>
          
                </div>
                
            </div>        
        </div>

  </section>
    
@endsection
