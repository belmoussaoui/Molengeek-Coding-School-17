<!-- ======= Features Section ======= -->
<section id="features" class="features mt-5" data-aos="fade-up">
<div class="container">
    <div class="section-title">
    <h2>{{ $feature->section->title }}</h2>
    <p>{{ $feature->section->text }}</p>
    </div>
    @foreach ($feature->featureItems as $key => $feature)
        <div class="row content mt-5">
        @if ($key % 2 === 0)
            <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                <img src={{ asset("img/$feature->image") }} class="img-fluid" alt="">
            </div>
        @endif
            <div class="col-md-7 pt-4"  data-aos="fade-left" data-aos-delay="100">
                <h3>{{ $feature->title }}</h3>
                <p class="fst-italic">{{ $feature->description }}</p>
                <ul class="text-left">
                @if ($feature->check1)
                    <li><i class="bi bi-check"></i>{{ $feature->check1 }}</li>
                @endif
                @if ($feature->check2)
                    <li><i class="bi bi-check"></i>{{ $feature->check2 }}</li>  
                @endif
                @if ($feature->check3)
                    <li><i class="bi bi-check"></i>{{ $feature->check3 }}</li>
                @endif
                </ul>
                @if ($feature->text)
                    <p>{{ $feature->text }}</p>
                @endif
            </div>
        @if ($key % 2 === 1)
            <div class="col-md-5" data-aos="fade-left" data-aos-delay="">
                <img src={{ asset("img/$feature->image") }} class="img-fluid" alt="">
            </div>
        @endif
    @endforeach
    </div>
</div>
</section><!-- End Features Section -->