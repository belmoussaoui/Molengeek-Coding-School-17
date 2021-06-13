@extends('layouts.index')

@section('content')

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<style>
    .paddingZero{
        padding: 0!important;
    }

    .myHover:hover{
        background: white!important;
    }
</style>
<x-auth-validation-errors class="mb-4" :errors="$errors" />
<section id="hero" class="">
    <div class="container-fluid paddingZero" data-aos="fade-up">
        <a href="/" class="btn-get-started scrollto ms-5"><</a>
        <div class="row justify-content-center">
            <div class="services row justify-content-center">
                <h1 class="text-center mb-5">Register</h1>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="w-100 text-white fs-5">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                
                            <!-- Name -->
                            <div>
                                <x-label for="name" :value="__('Name')" />
                
                                <x-input id="name" class="form-control block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            </div>
                
                            <!-- Email Address -->
                            <div class="mt-2">
                                <x-label for="email" :value="__('Email')" />
                
                                <x-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>
                
                            <!-- Password -->
                            <div class="mt-2">
                                <x-label for="password" :value="__('Password')" />
                
                                <x-input id="password" class="form-control block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                            </div>
                
                            <!-- Confirm Password -->
                            <div class="mt-2">
                                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                
                                <x-input id="password_confirmation" class="form-control block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required />
                            </div>
                
                            <div class="d-flex justify-content-between mt-2">
                                <a class="underline text-white text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                
                                <button type="submit" class="btn-get-started bg-transparent myHover">
                                    {{ __('Log in') }}
                                </button>
                            </div>  
                        </form>
                                                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection