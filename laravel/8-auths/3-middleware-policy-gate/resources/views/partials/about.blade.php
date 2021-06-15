    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
  
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
              <img src="{{ asset("img/" . $about->image) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
              <h3>{{ $about->title }}</h3>
              <p class="fst-italic">
                {{ $about->description }}
              </p>
              <ul>
                 <li><i class="bi bi-check-circle"></i> {{ $about->fact1 }}</li>
                 <li><i class="bi bi-check-circle"></i> {{ $about->fact2 }}</li>
                 <li><i class="bi bi-check-circle"></i> {{ $about->fact3 }}</li>
              </ul>
              <a href="#" class="read-more">{{ $about->button }} <i class="bi bi-long-arrow-right"></i></a>
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->
  