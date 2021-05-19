@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4 bg-danger">Edit user</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="/users/{{ $user->id }}" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input value="{{ $user->nom }}" type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">prenom</label>
                <input value="{{ $user->prenom }}" type="text" class="form-control"  name="prenom">
            </div>
            <div class="mb-3">
                <label class="form-label">age</label>
                <input value="{{ $user->age }}" type="number" class="form-control"  name="age">
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input value="{{ $user->email }}" type="text" class="form-control"  name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Mot de passe</label>
                <input value="{{ $user->mdp }}" type="password" class="form-control"  name="mdp">
            </div>
            <div class="mb-3">
              <label class="form-label">Photo de profil</label>
              <input type="file" class="form-control"  name="pdp">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
