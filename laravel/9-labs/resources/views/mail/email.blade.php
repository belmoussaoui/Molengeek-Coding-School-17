@extends('layouts.index')

@section('content')
	<div>
        <h1>{{ $dataEmail['name'] }}</h1>
        <h2>{{ $dataEmail['email'] }}</h2>
        <h3>{{ $dataEmail['subject'] }}</h3>
        <p>{{ $dataEmail['message'] }}</p>
    </div>
@endsection