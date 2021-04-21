@extends("layouts.app")

@section('content')
    @include('partials.header')
    <h1>je suis le about!</h1>
    <div class="card" style="width: 18rem;">
        <img src={{ asset("img/image1.png") }} class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    @include('partials.footer')
@endsection