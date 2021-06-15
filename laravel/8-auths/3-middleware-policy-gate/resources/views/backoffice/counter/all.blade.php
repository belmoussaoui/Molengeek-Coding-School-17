@extends('layouts.index')

@section('content')
    @include('backoffice.header')

    <section id="hero" class="d-flex align-items-center flex-column">
        
        <div class="container-fluid" data-aos="fade-up">
            @if (session('message'))
               <div class="container p-0">
                   <div  class="alert alert-success">
                       {{ session('message') }}
                   </div>
               </div>
           @endif
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 pt-1 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <div class="text-center">
                        <h1>Counters</h1>
                        @can('create', \App\Models\Counter::class)
                            <a class="m-0 py-1 px-2 btn-get-started mt-3 text-end mx-1" href="{{ route('counter.create') }}">+</a>  
                        @endcan
                    </div>
                    <table class="table text-light mt-5">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Number</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($counters as $counter)
                                <tr>
                                    <th scope="row">{{ $counter->id }}</th>
                                    <td><a class="text-white text-decoration-underline" href="{{ route('counter.show', $counter) }}">{{ $counter->title}}</a></td>
                                    <td>{{ $counter->number}}</td>
                                    <td>
                                        <div class="d-flex">
                                            @can('update', $counter)
                                                <a class="m-0 py-1 px-2 btn-get-started mx-1" href="{{ route('counter.edit', $counter) }}">Edit</a>
                                            @endcan
                                            @can('delete', $counter)
                                                <form action={{ route('counter.destroy', $counter) }} method="post">
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
                    <div>{{ $counters->links() }}</div>
          
                </div>
                
            </div>        
        </div>

  </section><!-- End Hero -->
    
@endsection
