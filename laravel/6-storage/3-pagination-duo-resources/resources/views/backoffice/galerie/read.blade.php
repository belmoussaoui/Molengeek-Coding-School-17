@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
        <img style="width : 200px" src={{ asset('img/'. $galerie->image) }} alt="">        <div class="card-body">
          <h5 class="card-title">galerie</h5>
            <p>Nom :{{ $galerie->nom }}</p>
            <p>Description:{{ $galerie->description }}</p>
          <a href="{{ route("galeries.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection