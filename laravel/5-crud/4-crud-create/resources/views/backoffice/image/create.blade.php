@extends('layouts.app')

@section('content')
    <h2 class="text-center text-decoration-underline my-3">Create Image</h2>
    <form action="/image/store" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Lien</label>
            <input type="text" class="form-control" name="lien">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection