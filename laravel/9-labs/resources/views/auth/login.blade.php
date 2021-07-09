@php
use App\Models\Header;
use App\Models\Hero;
use App\Models\Footer;
@endphp

<html lang="en"><head>
    
    <link rel="stylesheet" href="{{  asset("css/style.css")  }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("css/flaticon.css") }}"/>
    <link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}"/>
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.css") }}"/>
    <link rel="stylesheet" href="{{ asset("css/style.css") }}"/>

    <!-- Scripts -->
    <script src="{{ asset("js/app.js") }}" defer=""></script>
</head>
<body>
    @include('partials.header', ['header' => Header::first(), 'hero' => Hero::first()])
    {{-- <div id="preloder">
		<div class="loader">
			<img class="inline-block" src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div> --}}
    @if (count($errors->all()))    
        <div class="m-40 mb-5">
            <div class="p-12 text-center container" style="background-color: #2be6ab;">
                @foreach ($errors->all() as  $message)
                <p class="text-white" style="color: #6a23b5; text-transform: uppercase; font-weight: 600">{{ $message }}</p>
                @endforeach

            </div>
        </div>
    @endif
    <div class="font-sans text-gray-900 antialiased">
        <div class="overlay"></div>

        
        <div class="contact-section spad fix z-50" style="postion: relative">
            <div class="container mt-24">
                <div class="row">
                    <x-auth-session-status class="mb-4 mx-auto" :status="session('status')" />
                    {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
                    <!-- contact info -->
                
                    <div class="col-md-5 col-md-offset-1 contact-info col-push ">
                        <div class="section-title left">
                            <h2>Log-in</h2>
                        </div>
                        <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.</p>

                
                {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}


                {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
                            
                <form method="POST" action="/login" class="form-class">
                    @csrf
            
                    <!-- Email Address -->
                    <div class="mt-4">   
                        <input type="text" name="email" placeholder="Your email" id="email" type="email" required="required" autofocus="autofocus">
                    </div>
            
                    <!-- Password -->
                    <div class="mt-4">     
                        <input id="password" placeholder="Your password" type="password" name="password" required="required" autocomplete="current-password">
                    </div>
            
                    <!-- Remember Me -->
                    {{-- <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="" name="remember">
                            <span class="">Remember me</span>
                        </label>
                    </div> --}}
            
                    <div class="flex items-center justify-center mt-4">
                        {{-- <a class="" href="http://127.0.0.1:8000/forgot-password">
                            Forgot your password?
                        </a>          --}}
                        <button name="log-in" etype="submit" class="site-btn">Log in</button>
                    </div>

                </form>
                    </div>
                    <!-- contact form -->
                    <div class="col-md-6 col-pull ">
                        <div class="section-title dark">
                <h2>Register in <span>the lab</span></h2>
            </div>
                    
            {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
        
            <form method="POST" action="/register" class="form-class">
                @csrf
                <div class="row">
                    <!-- Name -->
                    <div class="col-sm-6">
                        <input placeholder="Your name" id="name" type="text" name="name" required="required" autofocus="autofocus">
                    </div>
                    
                    <!-- Email Address -->
                    <div class="col-sm-6">
                        <input placeholder="Your email" id="email" type="email" name="email" required="required">
                    </div>
                    
                    <!-- Password -->
                    <div class="mt-4 col-sm-12">
                        <input placeholder="Your password" id="password" type="password" name="password" required="required" autocomplete="new-password">
                    </div>
                    
                    <!-- Confirm Password -->
                    <div class="mt-4 col-sm-12">
                        <input placeholder="Confirm password" id="password_confirmation" type="password" name="password_confirmation" required="required">
                    </div>
                    
                    <div class="text-center">
                        {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="http://127.0.0.1:8000/login">
                            Already registered?
                        </a> --}}
                        
                        <button type="submit" class="site-btn">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset("js/jquery-2.1.4.min.js") }}"></script>
	<script src="{{ asset("js/bootstrap.min.js") }}"></script>
	<script src="{{ asset("js/magnific-popup.min.js") }}"></script>
	<script src="{{ asset("js/owl.carousel.min.js") }}"></script>
	<script src="{{ asset("js/circle-progress.min.js") }}"></script>
	<script src="{{ asset("js/main.js") }}"></script>

</body></html> 
