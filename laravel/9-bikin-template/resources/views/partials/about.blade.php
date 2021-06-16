<!-- ======= About Section ======= -->
<section id="about" class="about">
<div class="container">

    <div class="row no-gutters">
    <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
        <div class="content">
        <h3>{{ $about->section->title }}</h3>
        <p>
            {{ $about->section->text }}
        </p>
        <a href="#" class="about-btn text-theme bg-clear">{{ $about->button }} <i class="bx bx-chevron-right"></i></a>
        </div>
    </div>
    <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
        <div class="icon-boxes d-flex flex-column justify-content-center">
        <div class="row">
            @foreach ($about->icons as $key => $icon)
                @if ($key < 4)
                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <i class="bx {{ $icon->icon }}"></i>
                    <h4>{{ $icon->title }}</h4>
                    <p>{{ $icon->description }}</p>
                    </div>
                    @endif
            @endforeach
        </div>
        </div><!-- End .content-->
    </div>
    </div>

</div>
</section><!-- End About Section -->