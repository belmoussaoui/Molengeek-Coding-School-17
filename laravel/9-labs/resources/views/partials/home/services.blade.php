
<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        @auth
            @if (Auth::user()->canEdit())
                <div class="edit">
                    <a class="edit" href="/services/1/edit">
                        Edit Services
                    </a>
                </div>
            @endif
        @endauth
        <div class="section-title dark">
            <h2>{!! str_replace(["[", "]"], ["<span>", "</span>"], $service->title) !!}</h2>
        </div>
        <div class="row">
            <!-- single service -->
            @foreach ($service->serviceItems->shuffle(); as $key => $item)
                @if ($key < 9)
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <div class="icon">
                                <i class="{{ $item->icon }}"></i>
                            </div>
                            <div class="service-text">
                                <h2>{{ $item->name }}</h2>
                                <p style="min-height: 120px;">{{ $item->text }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                    
            @endforeach
            
        </div>
        <div class="text-center">
            <a href="{{ $service->button_href }}" class="site-btn">{{ $service->button }}</a>
        </div>
    </div>
</div>
<!-- services section end -->