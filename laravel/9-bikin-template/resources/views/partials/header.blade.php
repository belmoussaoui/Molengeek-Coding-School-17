<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.html">Bikin</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src={{ asset("img/logo.png") }} alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#services">Services</a></li>
        <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
        <li><a class="nav-link scrollto" href="#team">Team</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        @auth
            <li><a class="getstarted ms-2" href="/dashboard">Dashboard</a></li>
            <li><form method="POST" action="/logout">
                @csrf
                <a class="getstarted ms-2" href="/logout" onclick="event.preventDefault(); this.closest('form').submit()">Log Out</a>
            </form></li>
        @else
            <li><a class="getstarted ms-2" href="/login">Log In</a></li>
        @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->