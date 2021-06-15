@extends('layouts.index')

@section('content')

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />
<style>
    .paddingZero{
        padding: 0!important;
    }

    .myHover:hover{
        background: white!important;
    }
</style>
<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />
<section id="hero" class="">

    <div class="container-fluid paddingZero" data-aos="fade-up">
        <a href="/" class="btn-get-started scrollto ms-5"><</a>
        <div class="row justify-content-center">

            <div class="services row justify-content-center">
                <h1 class="text-center mb-5">Login</h1>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="w-100 text-white fs-5">
                        <form method="POST"  action="{{ route('login') }}">
                            @csrf
                        
                            <!-- Email Address -->
                            <div>
                                <x-label for="email" :value="__('Email')" />
                        
                                <x-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>
                        
                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" :value="__('Password')" />
                        
                                <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="current-password" />
                        
                            </div>
                        
                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                        
                            <div class="d-flex justify-content-between">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 text-white" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                        
                                <button type="submit" class="btn-get-started scrollto bg-transparent myHover">
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