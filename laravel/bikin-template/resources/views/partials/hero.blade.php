<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
    <h1>{{ $hero->section->title }}</h1>
    <h2>{{ $hero->section->text }}</h2>
    <a href="#about" class="btn-get-started scrollto">{{ $hero->button }}</a>
    <img src={{ asset("img/$hero->image") }} class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>

</section><!-- End Hero -->