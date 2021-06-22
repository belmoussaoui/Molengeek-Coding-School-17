@extends('layouts.index')

@section('content')
	@include('partials.header')
	@include('partials.home.intro')
	@include('partials.home.about')
	@include('partials.home.testimonial')
	@include('partials.home.services')
	@include('partials.home.team')
	@include('partials.home.promotion')
	@include('partials.contact')
@endsection
