@extends('layouts.index')
@section('content')
	<h1>{{ $contenuEmail['name'] }}</h1>
	<h2>{{ $contenuEmail['email'] }}</h2>
	<h3>{{ $contenuEmail['subject'] }}</h3>
	<p>{{ $contenuEmail['message'] }}</p>
@endsection