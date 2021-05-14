@extends('layout.app')

@section('content')
  
    <section class="container">

        <h1 class="text-center my-3">Edit Service</h1>

        <ul class="bg-danger rounded">
        
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
            
        </ul>

        <form method="POST" action="/service/{{ $service->id }}/update">
            @csrf
            <div class="mb-3">
                <label  class="form-label">icone</label>
                 <select class="form-control" name="icone">
                <option value="fa-address-book">Librairie</option>
                <option value="fa-taxi">Taxi</option>
                <option value="fa-hospital">Hopital</option>
                <option value="fa-cut">Coiffeur</option>
                <option value="fa-fire-extinguisher">Pompier</option>
            </select>
            </div>
            <div class="mb-3">
                <label  class="form-label">titre</label>
                <input type="text" class="form-control" value="{{ $service->titre }}" name="titre">
            </div>
            <div class="mb-3">
                <label  class="form-label">description</label>
                <input type="text" class="form-control" value="{{ $service->description }}" name="description">
            </div>
            <button type="submit" class="btn btn-secondary text-white my-3">Submit</button>
        </form>
      
    </section>

  @include('partial.footer')
@endsection