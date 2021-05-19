@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4 bg-danger">Create galerie</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="{{route("galeries.store")  }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control"  name="image">
              </div>
                 
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control"  name="description">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
