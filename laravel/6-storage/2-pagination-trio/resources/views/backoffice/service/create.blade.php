@extends('layout.app')

@section('content')
<section class="container">

    <h1 class="text-center my-3">Create Service</h1>

    <ul class="bg-danger rounded">
    
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    
    </ul>

    <form action="/service/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Icone</label>
            <select class="form-control" name="icone">
                <option value="fa-address-book">Libraire</option>
                <option value="fa-taxi">Taxi</option>
                <option value="fa-hospital">Hopital</option>
                <option value="fa-cut">Coiffeur</option>
                <option value="fa-fire-extinguisher">Pompier</option>
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
       
        <button type="submit" class="btn btn-secondary my-3">Submit</button>
    </form>

</section>

    @include('partial.footer')
@endsection