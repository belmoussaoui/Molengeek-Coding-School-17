@extends('layouts.app')

@section('content')

    <ul class="bg-danger rounded">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    <h2 class="text-center text-decoration-underline my-3">Créer une équipe</h2>

    <form action="{{ route('equipes.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Ville</label>
            <input type="text" class="form-control" name="ville">
        </div>
        <div class="mb-3">
            <label class="form-label">Pays</label>
            <input type="text" class="form-control" name="pays">
        </div>
        <div class="mb-3">
            <label class="form-label">ATT</label>
             <input type="number" class="form-control" name="ATT">
        </div>
        <div class="mb-3">
            <label class="form-label">CT</label>
            <input type="number" class="form-control" name="CT">
        </div>
        <div class="mb-3">
            <label class="form-label">DC</label>
            <input type="number" class="form-control" name="DC">
        </div>
        <div class="mb-3">
            <label class="form-label">RP</label>
            <input type="number" class="form-control" name="RP">
        </div>
        <div class="mb-3">
            <label class="form-label">Continent</label>
            <select name="continent_id" class="form-control" >
                @foreach ($continents as $continent)
                    <option value="{{ $continent->id }}">{{ $continent->nom }}</option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
       
    </form>
    
@endsection