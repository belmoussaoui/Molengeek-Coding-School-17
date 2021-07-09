<!-- Header section -->
<header class="header-section">
    
    <div style="max-width: 120px" class="logo d-flex">
        <img src="{{ asset("img/$hero->logo") }}" alt=""><!-- Logo -->
        @auth
            @if (Auth::user()->canEdit())
                <div class="edit">
                    <a href="/header/{{ $header->id }}/edit">Edit Header</a>
                </div>
            @endif   
        @endauth
        
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{ "home" == Route::currentRouteName() ? 'active': '' }}"><a href="{{ route("home") }}">{{ $header->item1 }}</a></li>
            <li class="{{ "services" == Route::currentRouteName() ? 'active': '' }}"><a href="{{ route("services") }}">{{ $header->item2 }}</a></li>
            <li class="{{ "blog" == Route::currentRouteName() ? 'active': '' }}"><a href="{{ route("blog") }}">{{ $header->item3 }}</a></li>
            <li class="{{ "contact" == Route::currentRouteName() ? 'active': '' }}"><a href="{{ route("contact") }}">{{ $header->item4 }}</a></li>
            @if (Route::has('login'))
                @auth 
                    <li><a class="" href={{ route('dashboard')}}>Backoffice</a></li>
                    <li class="ms-5">
                        <form class="inline" action={{ route('logout') }} method="POST">
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
    </nav>
</header>
<!-- Header section end -->
