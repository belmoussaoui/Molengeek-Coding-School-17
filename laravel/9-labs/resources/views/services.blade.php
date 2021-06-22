@extends('layouts.index')

@section('content')
	@include('partials.header')
	@include('partials.page-header')
	@include('partials.services.services')
	@include('partials.services.features')
	@include('partials.services.services-card')
	@include('partials.newsletter')
	@include('partials.contact')
@endsection