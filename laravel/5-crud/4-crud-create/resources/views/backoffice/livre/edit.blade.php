@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">Edit Livre</h2>
    <form action="/livre/{{ $livre->id }}/update" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" class="form-control" value="{{ $livre->titre }}" name="titre">
        </div>
        <div class="mb-3">
            <label class="form-label">Auteur</label>
            <input type="text" class="form-control" value="{{ $livre->auteur }}" name="auteur">
        </div>
        <div class="mb-3">
            <label class="form-label">Date de publication</label>
            <input type="date" class="form-control" value="{{ $livre->ddp }}" name="ddp">
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre de pages</label>
            <input type="number" class="form-control" value="{{ $livre->ndp }}" name="ndp">
        </div>
        <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" {{ $livre->estMobile ? "checked" : null }} name="estMobile">
            <label class="form-check-label">Mobile</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection