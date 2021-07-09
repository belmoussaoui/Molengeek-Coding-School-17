@extends('layouts.index')

@section('content')
    @include('partials.header')
    @include('partials.contact.page-header')
    
    <iframe width="100%" height="750px" src="https://maps.google.com/maps?q=%7B%7B{{ $contact->marker }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no"></iframe>
    

    @include('partials.contact')
@endsection
