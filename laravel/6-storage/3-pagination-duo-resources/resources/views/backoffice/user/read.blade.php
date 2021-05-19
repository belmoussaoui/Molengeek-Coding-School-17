@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
        <img src="{{ asset("img/" . $user->pdp) }}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">User</h5>
             <p>Nom : {{ $user->nom }}</p>
            <p>Prenom:{{ $user->prenom }}</p>
            <p>Age:{{ $user->age }}</p>
            <p>Email:{{ $user->email }}</p>
          <a href="{{ route("users.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection