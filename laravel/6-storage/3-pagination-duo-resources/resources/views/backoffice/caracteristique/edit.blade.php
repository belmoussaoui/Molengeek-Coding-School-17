@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4 bg-danger">Édition Caractéristique</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="/caracteristiques/{{ $caracteristique->id }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
              <label class="form-label">Icone</label>
              <select class="form-control fw-bold" name="icone">
                    <option value="fa-address-book" {{ $caracteristique->icone === 'fa-address-book' ? 'selected' : '' }}> Librairie</option>
                    <option value="fa-taxi" {{ $caracteristique->icone === 'fa-taxi' ? 'selected' : '' }}> Taxi</option>
                    <option value="fa-hospital" {{ $caracteristique->icone === 'fa-hospital' ? 'selected' : '' }}> Hopital</option>
                    <option value="fa-cut" {{ $caracteristique->icone === 'fa-cut' ? 'selected' : '' }}> Coiffeur</option>
                    <option value="fa-fire-extinguisher" {{ $caracteristique->icone === 'fa-fire-extinguisher' ? 'selected' : '' }}> Pompier</option>
              </select>

            </div>
            <div class="mb-3">
                <label class="form-label">Chiffres</label>
                <input value="{{ $caracteristique->chiffres }}" type="number" class="form-control" name="chiffres">
            </div>
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input value="{{ $caracteristique->nom }}" type="text" class="form-control" name="nom">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection

