@extends('layouts.index')

@section('content')
    @include('partials.header')
    @include('partials.page-header')
    <!-- Google map -->
    <div class="map" id="map-area"></div>
    @include('partials.contact')

    <script src="{{ asset("https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo") }}"></script>
	<script src="{{ asset("js/map.js") }}"></script>
@endsection
