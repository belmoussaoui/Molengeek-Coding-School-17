@extends('layouts.app')

@section('content')
    
    <form action="/image/{{ $image->id }}/update" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Lien</label>
            <input type="text" class="form-control" value="{{ $image->lien }}" name="lien">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $image->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection