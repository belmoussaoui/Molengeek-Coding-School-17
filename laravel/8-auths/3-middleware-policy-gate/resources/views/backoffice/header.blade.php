<header id="header" class="fixed-top " style="{{ $navbar ?? false ? '' : 'background-color: rgba(24, 6, 185, 0.8);' }}">
  <div class="container d-flex align-items-center justify-content-between">
    <h1 class="logo"><a href="/">Techie</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto {{ "dashboard" == Route::currentRouteName() ? 'active': '' }}" href="{{ route('dashboard')}}">Dashboard</a></li>
        <li><a class="nav-link scrollto {{ "counter.index" == Route::currentRouteName() ? 'active': '' }}" href="{{ route('counter.index')}}">Counter</a></li>
        <li><a class="nav-link scrollto {{ "service.index" == Route::currentRouteName() ? 'active': '' }}" href="{{ route('service.index')}}">Service</a></li>
        <li><a class="nav-link scrollto {{ "testimonial.index" == Route::currentRouteName() ? 'active': '' }}" href="{{ route('testimonial.index')}}">Testimonial</a></li>
        <li><a class="nav-link scrollto {{ "hero.index" == Route::currentRouteName() ? 'active': '' }}" href="{{ route('hero.index')}}">Hero</a></li>
        <li><a class="nav-link scrollto {{ "about.index" == Route::currentRouteName() ? 'active': '' }}" href="{{ route('about.index')}}">About</a></li>
        <li><a class="nav-link scrollto {{ "section.index" == Route::currentRouteName() ? 'active': '' }}" href="{{ route('section.index')}}">Section</a></li>
        <li class="ms-5">
            <form action={{ route('logout') }} method="POST">
              @csrf
              <a onclick="event.preventDefault(); this.closest('form').submit();" type="submit" class="nav-link scrollto" href="{{ route('logout')}}">Logout</a>
            </form>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->