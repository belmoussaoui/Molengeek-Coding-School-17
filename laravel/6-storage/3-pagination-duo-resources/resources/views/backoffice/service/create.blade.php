@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4 bg-danger">Création Service</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="{{route("services.store")  }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">Icone</label>
              <select class="form-control fw-bold" name="icone">
                    <option value="fa-address-book"> Librairie</option>
                    <option value="fa-taxi"> Taxi</option>
                    <option value="fa-hospital"> Hopital</option>
                    <option value="fa-cut"> Coiffeur</option>
                    <option value="fa-fire-extinguisher"> Pompier</option>
              </select>

            </div>
            <div class="mb-3">
                <label class="form-label">Titre</label>
                <input type="text" class="form-control" name="titre">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection

