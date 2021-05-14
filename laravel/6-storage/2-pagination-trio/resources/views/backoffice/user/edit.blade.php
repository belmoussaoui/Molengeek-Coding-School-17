@extends('layout.app')

@section('content')
  
    <section class="container">

        <h1 class="text-center my-3">Edit User</h1>

        <ul class="bg-danger rounded">
        
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
            
        </ul>

        <form method="POST" action="/user/{{ $user->id }}/update" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label  class="form-label">nom</label>
                <input type="text" class="form-control" value="{{ $user->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label  class="form-label">prenom</label>
                <input type="text" class="form-control" value="{{ $user->prenom }}" name="prenom">
            </div>
            <div class="mb-3">
                <label  class="form-label">age</label>
                <input type="text" class="form-control" value="{{ $user->age }}" name="age">
            </div>
            <div class="mb-3">
                <label  class="form-label">email</label>
                <input type="text" class="form-control" value="{{ $user->email }}" name="email">
            </div>
            <div class="mb-3">
                <label  class="form-label">password</label>
                <input type="text" class="form-control" value="{{ $user->password }}" name="password">
            </div>
            <div class="mb-3">
                <label  class="form-label">photo</label>
                <input type="file" class="form-control" value="{{ $user->photo }}" name="photo">
            </div>
            <button type="submit" class="btn btn-secondary text-white my-3">Submit</button>
        </form>
      
    </section>

  @include('partial.footer')
@endsection