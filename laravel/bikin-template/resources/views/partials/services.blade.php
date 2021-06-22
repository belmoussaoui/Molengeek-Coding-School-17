<section id="services" class="services">
    <div class="container" data-aos="fade-up">
        
        <div class="section-title mt-5">
            <h2>{{ $service->section->title }}</h2>
            <p>{{ $service->section->text }}</p>
        </div>
        
        <div class="row">
            @foreach ($service->serviceItems as $item)
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box bg-clear">
                    <div class="icon"><i class="bx {{ $item->icon }}"></i></div>
                    <h4 class="title"><a href="">{{ $item->title }}</a></h4>
                    <p class="description">{{ $item->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    
</div>
</section>