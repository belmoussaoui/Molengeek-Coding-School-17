@extends('layouts.index')

@section('content')
    @include('partials.header')
    @include('partials.blog.page-header')
    @include('partials.blog.post.page')
    @include('partials.newsletter')
@endsection

