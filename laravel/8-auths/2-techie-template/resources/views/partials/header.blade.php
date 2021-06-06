<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center justify-content-between">
    <h1 class="logo"><a href=""index.html"">Techie</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#services">Services</a></li>
        <li><a class="nav-link scrollto " href="#testimonials">Testimonials</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        @if (Route::has('login'))
        @auth 
                  {{-- {{ dd('ok') }} --}}
                  <li><a class="nav-link scrollto" href={{ route('counter.index')}}>Backoffice</a></li>
                  <li class="ms-5">
                    <form action={{ route('logout') }} method="POST">
                      @csrf
                      <a onclick="event.preventDefault(); this.closest('form').submit();" type="submit" class="nav-link scrollto" href="{{ route('logout')}}">Logout</a>
                    </form>
                  </li>
              @else
                  <li class="ms-5"><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>

                  @if (Route::has('register'))
                      <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                  @endif
              @endauth
        @endif
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->