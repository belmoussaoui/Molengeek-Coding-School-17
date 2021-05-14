@extends('layout.app')

@section('content')
<section class="container">

    <h1 class="text-center my-3">Create User</h1>

    <ul class="bg-danger rounded">
    
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    
    </ul>

    <form action="/user/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Prenom</label>
            <input type="text" class="form-control" name="prenom">
        </div>
        <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="number" class="form-control" name="age">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Mot de Passe</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label class="form-label">Photo de Profil</label>
            <input type="file" class="form-control" name="photo">
        </div>
        <button type="submit" class="btn btn-secondary my-3">Submit</button>
    </form>

</section>

    @include('partial.footer')
@endsection