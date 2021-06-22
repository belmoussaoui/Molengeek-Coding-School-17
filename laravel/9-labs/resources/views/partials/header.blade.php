<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src={{ asset("img/logo.png") }} alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            {{-- <a class="site-btn my-3 btn-3" style="margin-right: 20px; padding-left: 1px;" href="/hearder/{{ $header->id }}/edit">Edit Menu</a> --}}
            <li class="{{ "home" == Route::currentRouteName() ? 'active': '' }}"><a href="{{ route("home") }}">Home</a></li>
            <li class="{{ "services" == Route::currentRouteName() ? 'active': '' }}"><a href="{{ route("services") }}">Services</a></li>
            <li class="{{ "blog" == Route::currentRouteName() ? 'active': '' }}"><a href="{{ route("blog") }}">Blog</a></li>
            <li class="{{ "contact" == Route::currentRouteName() ? 'active': '' }}"><a href="{{ route("contact") }}">Contact</a></li>
        </ul>
    </nav>
</header>
<!-- Header section end -->