@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Description</h5>
            <p>Icone: <i class="fas fa-2x {{ $service->icone }}"></i></p>
            <p>Titre: {{ $service->titre }}</p>
            <p>Description: {{ $service->description }}</p>
          <a href="{{ route("services.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection