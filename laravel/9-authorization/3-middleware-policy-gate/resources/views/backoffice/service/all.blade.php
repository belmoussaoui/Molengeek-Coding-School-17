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
                        <h1>Services</h1>
                        @can('create', \App\Models\Service::class)
                            <a class="m-0 py-1 px-2 btn-get-started mt-3 text-end mx-1" href="{{ route('service.create') }}">+</a>    
                        @endcan
                    </div>
                    <table class="table text-light mt-5">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Icon</i></th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <th scope="row">{{ $service->id }}</th>
                                    <td><i class="bx fs-3 {{ $service->icon}}"></td>
                                    <td><a class="text-white text-decoration-underline" href="{{ route('service.show', $service) }}">{{ $service->title}}</a></td>
                                    <td>{{ $service->description }}</td>
                                    <td>
                                        <div class="d-flex">
                                            @can('update', $service)
                                                <a class="m-0 py-1 px-2 btn-get-started mx-1" href="{{ route('service.edit', $service) }}">Edit</a>
                                            @endcan
                                            @can('delete', $service)
                                                <form action={{ route('service.destroy', $service) }} method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn-get-started btn m-0 mx-1 py-1 px-2">delete</button>
                                                </form>
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            
                           
                        </tbody>
                    </table>
                    <div>{{ $services->links('vendor.pagination.default') }}</div>
          
                </div>
                
            </div>        
        </div>

  </section><!-- End Hero -->
    
@endsection
