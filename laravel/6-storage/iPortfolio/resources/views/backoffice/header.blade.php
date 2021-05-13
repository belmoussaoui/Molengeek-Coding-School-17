<!-- ======= Header ======= -->
<header id="header">
<div class="d-flex flex-column">

    <div class="profile">
    <img src="/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
    <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
    <div class="social-links mt-3 text-center">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
    </div>

    <nav class="nav-menu">
    <ul>
        <li class={{ "user" === $page ? "active" : "" }}><a href="/user"><i class="bx bx-user"></i> <span>User</span></a></li>
        <li class={{ "fact" === $page ? "active" : "" }}><a href="/fact"><i class="bx bx-pencil"></i> <span>Facts</span></a></li>
        <li class={{ "skill" === $page ? "active" : "" }}><a href="/skill"><i class="bx bx-box"></i> <span>Skills</span></a></li>
        <li class={{ "portfolio" === $page ? "active" : "" }}><a href="/portfolio"><i class="bx bx-sidebar"></i> <span>Portfolio</span></a></li>
        <li class={{ "service" === $page ? "active" : "" }}><a href="/service"><i class="bx bx-shopping-bag"></i> <span>Services</span></a></li>
        {{-- <li class={{ "contact" === $page ? "active" : "" }}><a href="/contact"><i class="bx bx-mail-send"></i> <span>Contact</span></a></li> --}}
        <hr class="text-white bg-white">
        <li><a href="/"><i class="bx bx-home"></i> <span>Home</span></a></li>
    </ul>
    </nav><!-- .nav-menu -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

</div>
</header><!-- End Header -->
