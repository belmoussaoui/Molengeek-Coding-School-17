{{-- 
<div class="container my-4">
    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
            <a class="nav-link {{ !Route::currentRouteName() ? 'active' : '' }}" href="/">Welcome</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link {{ Route::currentRouteName() === 'users.index' ? 'active' : '' }}" href="{{ route('users.index') }}">Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'services.index' ? 'active' : '' }}" href="{{ route('services.index') }}">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'caracteristiques.index' ? 'active' : '' }}" href="{{ route('caracteristiques.index') }}">Caracteristiques</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'portfolios.index' ? 'active' : '' }}" href="{{ route('portfolios.index') }}">Portfolio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'galeries.index' ? 'active' : '' }}" href="{{ route('galeries.index') }}">Galeries</a>
        </li>
    </ul>
</div> --}}

<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            CRUD RESOURCE
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li>
                <a class="{{ !Route::currentRouteName() ? 'active' : '' }}" href="/">
                    <i class="fas fa-2x fa-home"></i>
                    <p>Welcome</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse">
                    <i class="nc-icon"><img src="https://paper-dashboard-laravel.creative-tim.com/paper/img/laravel.svg"></i>
                    <p>
                            Back Office
                        {{-- <b class="caret"></b> --}}
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ Route::currentRouteName() === 'users.index' ? 'active' : '' }}">
                            <a href="{{ route('users.index') }}">
                                <span class="sidebar-mini-icon">U</span>
                                <span class="sidebar-normal"> User </span>
                            </a>
                        </li>
                        <li class="{{ Route::currentRouteName() === 'services.index' ? 'active' : '' }}">
                            <a href="{{ route('services.index') }}">
                                <span class="sidebar-mini-icon">S</span>
                                <span class="sidebar-normal"> Service </span>
                            </a>
                        </li>
                        <li class="{{ Route::currentRouteName() === 'caracteristiques.index' ? 'active' : '' }}">
                            <a href="{{ route('caracteristiques.index') }}">
                                <span class="sidebar-mini-icon">C</span>
                                <span class="sidebar-normal"> Caracteristique </span>
                            </a>
                        </li>
                        <li class="{{ Route::currentRouteName() === 'portfolios.index' ? 'active' : '' }}">
                            <a href="{{ route('portfolios.index') }}">
                                <span class="sidebar-mini-icon">P</span>
                                <span class="sidebar-normal"> Portfolio </span>
                            </a>
                        </li>
                        <li class="{{ Route::currentRouteName() === 'galeries.index' ? 'active' : '' }}">
                            <a href="{{ route('galeries.index') }}">
                                <span class="sidebar-mini-icon">G</span>
                                <span class="sidebar-normal"> Galerie </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>