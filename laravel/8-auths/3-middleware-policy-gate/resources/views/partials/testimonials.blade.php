<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>{{ $sections[1]->title }}</h2>
        <p>{{ $sections[1]->description }}</p>
    </div>

    <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

        @foreach ($testimonials as $testimonial)
            <div class="swiper-slide">
                <div class="testimonial-item">
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{ $testimonial->quotes }}
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img/testimonials/{{ $testimonial->image }}" class="testimonial-img" alt="">
                <h3>{{ $testimonial->auteur }}</h3>
                <h4>{{ $testimonial->job }}</h4>
                </div>
            </div><!-- End testimonial item -->
        @endforeach

        </div>
        <div class="swiper-pagination"></div>
    </div>

    </div>
</section><!-- End Testimonials Section -->