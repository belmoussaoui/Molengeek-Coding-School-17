@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
        <img style="width : 200px" src={{ asset('img/'. $portfolio->image) }} alt="">        <div class="card-body">
          <h5 class="card-title">portfolio</h5>
            <p>Nom :{{ $portfolio->nom }}</p>
            <p>Categorie:{{ $portfolio->categorie }}</p>
            <p>Description:{{ $portfolio->description }}</p>
          <a href="{{ route("portfolios.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection