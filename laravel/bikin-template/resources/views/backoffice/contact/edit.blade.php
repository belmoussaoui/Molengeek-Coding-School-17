@extends('backoffice.index')

@section('content')
<header id="header" class="fixed-top bg-transparent border-0">
    <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.html">Contact Section Edit</a></h1>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="getstarted mx-2" onclick="event.preventDefault(); document.getElementById('form-edit').submit()">Submit</a></li>
            <li><a class="getstarted mx-2" href="{{ route('contact.index') }}">Back</a></li>
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
                    <form id='form-edit' action={{ route('contact.update', $contact) }} method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $contact->section->title }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Text</label>
                            <input type="text" class="form-control" name="text" value="{{ $contact->section->text }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address Street</label>
                            <input type="text" class="form-control" name="address_street" value="{{ $contact->address_street }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address City</label>
                            <input type="text" class="form-control" name="address_city" value="{{ $contact->address_city }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address Number</label>
                            <input type="text" class="form-control" name="address_number" value="{{ $contact->address_number }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address Country</label>
                            <input type="text" class="form-control" name="address_country" value="{{ $contact->address_country }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email 1</label>
                            <input type="text" class="form-control" name="email1" value="{{ $contact->email1 }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email 2</label>
                            <input type="text" class="form-control" name="email2" value="{{ $contact->email2 }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone 1</label>
                            <input type="text" class="form-control" name="phone1" value="{{ $contact->phone1 }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone 2</label>
                            <input type="text" class="form-control" name="phone2" value="{{ $contact->phone2 }}">
                        </div>
                        
                    </form>
               </div>
            </div>
        </div>

    </div>
@endsection