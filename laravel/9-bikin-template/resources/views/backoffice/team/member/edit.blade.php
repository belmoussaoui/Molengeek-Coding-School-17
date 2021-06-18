@extends('backoffice.index')

@section('content')
<header id="header" class="fixed-top bg-transparent border-0">
    <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.html">Member Edit</a></h1>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="getstarted mx-2" onclick="event.preventDefault(); document.getElementById('form-edit').submit()">Submit</a></li>
            <li><a class="getstarted mx-2" href="{{ route('member.index') }}">Back</a></li>
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
                    <form id='form-edit' action={{ route('member.update', $member) }} method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        {{-- <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$member->usertitle}}">
                        </div> --}}
                        <div class="mb-3">
                            <label class="form-label">Job</label>
                            <input type="text" class="form-control" name="job" value="{{$member->job}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div>
                            <img class="img-fluid" src="{{ asset("img/team/$member->image") }}" alt="">
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