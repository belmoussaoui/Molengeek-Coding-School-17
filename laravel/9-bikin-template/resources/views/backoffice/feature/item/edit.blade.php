@extends('backoffice.index')

@section('content')
<header id="header" class="fixed-top bg-transparent border-0">
    <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.html">Icon Edit</a></h1>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="getstarted mx-2" onclick="event.preventDefault(); document.getElementById('form-edit').submit()">Submit</a></li>
            <li><a class="getstarted mx-2" href="{{ route('feature-items.index') }}">Back</a></li>
            {{-- <li><a class="getstarted ms-2" href="/login">Log In</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<div class="container mt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row mt-2 pt-5">
            <div class="col-2"></div>
            <div class="col-8">
                    <form id='form-edit' action={{ route('feature-items.update', $featureItem) }} method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $featureItem->title }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" value="{{ $featureItem->description }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Check 1</label>
                            <input type="text" class="form-control" name="check1" value="{{ $featureItem->check1 }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Check 2</label>
                            <input type="text" class="form-control" name="check2" value="{{ $featureItem->check2 }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Check 3</label>
                            <input type="text" class="form-control" name="check3" value="{{ $featureItem->check3 }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Text</label>
                            <textarea class="form-control" name="text" rows="3">{{ $featureItem->text }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div>
                            <img class="img-fluid" src="{{ asset("img/$featureItem->image") }}" alt="">
                        </div>
                    </form>
               </div>
            </div>
        </div>

    </div>
@endsection


<script>
window.onload = function() {
    let input = document.querySelector('input[type="file"]');
    input.addEventListener("change", previewFile);
}

function previewFile() {
    var preview = document.querySelector('img');
    var file    = document.querySelector('input[type=file]').files[0];
    var reader  = new FileReader();

    reader.addEventListener("load", function () {
        preview.src = reader.result;
    }, false);

    if (file) {
        reader.readAsDataURL(file);
    }
}
</script>