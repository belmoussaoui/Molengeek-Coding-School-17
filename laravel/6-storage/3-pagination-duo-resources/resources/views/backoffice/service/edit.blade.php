@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4 bg-danger">Édition Service</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="/services/{{ $service->id }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
              <label class="form-label">Icone</label>
              <select class="form-control fw-bold" name="icone">
                    <option value="fa-address-book" {{ $service->icone === 'fa-address-book' ? 'selected' : '' }}> Librairie</option>
                    <option value="fa-taxi" {{ $service->icone === 'fa-taxi' ? 'selected' : '' }}> Taxi</option>
                    <option value="fa-hospital" {{ $service->icone === 'fa-hospital' ? 'selected' : '' }}> Hopital</option>
                    <option value="fa-cut" {{ $service->icone === 'fa-cut' ? 'selected' : '' }}> Coiffeur</option>
                    <option value="fa-fire-extinguisher" {{ $service->icone === 'fa-fire-extinguisher' ? 'selected' : '' }}> Pompier</option>
              </select>

            </div>
            <div class="mb-3">
                <label class="form-label">Titre</label>
                <input value="{{ $service->titre }}" type="text" class="form-control" name="titre">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input value="{{ $service->description }}" type="text" class="form-control" name="description">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection

