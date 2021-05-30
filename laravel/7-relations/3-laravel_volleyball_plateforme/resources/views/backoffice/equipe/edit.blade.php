@extends('layouts.app')

@section('content')

    <ul class="bg-danger rounded">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    <h2 class="text-center text-decoration-underline my-3">Editer une équipe</h2>

    <form action="{{ route('equipes.update', $equipe) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input value="{{ $equipe->nom }}"type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Ville</label>
            <input value="{{ $equipe->ville }}"type="text" class="form-control" name="ville">
        </div>
        <div class="mb-3">
            <label class="form-label">Pays</label>
            <input value="{{ $equipe->pays }}"type="text" class="form-control" name="pays">
        </div>
        <div class="mb-3">
            <label class="form-label">ATT</label>
             <input value="{{ $equipe->ATT }}"type="number" class="form-control" name="ATT">
        </div>
        <div class="mb-3">
            <label class="form-label">CT</label>
            <input value="{{ $equipe->CT }}"type="number" class="form-control" name="CT">
        </div>
        <div class="mb-3">
            <label class="form-label">DC</label>
            <input value="{{ $equipe->DC }}"type="number" class="form-control" name="DC">
        </div>
        <div class="mb-3">
            <label class="form-label">RP</label>
            <input value="{{ $equipe->RP }}"type="number" class="form-control" name="RP">
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