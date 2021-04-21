@extends('layouts.app')

@section('content')
    @include('partials.header')

    <main class="container py-0 mb-5">
        <div class="row">
            <div class="col-6">
                <img class="img-fluid" src={{ asset("img/placeholder1.png") }} alt="">
            </div>
            <div class="col-6">
                <h3>About Modern School</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis esse facere accusantium hic perspiciatis ipsa magnam debitis. Impedit, quibusdam! Ullam consectetur tempore recusandae earum animi incidunt quos laudantium assumenda tenetur!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam veniam at, in suscipit quam doloribus cum maiores tenetur tempora excepturi.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus totam tempora, dolorem modi reprehenderit ea. Iusto, praesentium? Tempora, voluptas voluptatem.</p>
            </div>
        </div>
        
    </main>

    @include('partials.footer')
@endsection