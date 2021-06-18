<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
<div class="container" data-aos="fade-up">

    <div class="section-title">
    <h2>{{ $testimonial->section->title }}</h2>
    <p>{{ $testimonial->section->text }}</p>
    </div>

    <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
    <div class="swiper-wrapper">

        @foreach ($testimonial->testimonialItems as $item)
            <div class="swiper-slide">
            <div class="testimonial-item pb-3">
                <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {{ $item->quote }}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src={{ asset("img/testimonials/$item->image") }} class="testimonial-img" alt="">
                <h3>{{ $item->name }}</h3>
                <h4>{{ $item->job }}</h4>
                <div class="navbar d-flex justify-content-center mt-3">
                    <a class="mx-1 getstarted" href="{{ route('testimonial-items.edit', $item) }}">Edit</a>
                    <form action={{ route('testimonial-items.destroy', $item) }} method="post">
                        @csrf
                        @method('delete')
                        <a href="" onclick="event.preventDefault(); this.closest('form').submit();" class="mx-1 getstarted">Delete</a>
                    </form>
                </div>
            </div>
            </div><!-- End testimonial item -->
        @endforeach


    </div>
    <div class="swiper-pagination"></div>
    </div>

</div>
</section><!-- End Testimonials Section -->