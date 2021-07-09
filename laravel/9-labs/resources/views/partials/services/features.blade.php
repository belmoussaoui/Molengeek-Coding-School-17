<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
         @auth
        <div class="edit edit-2 ">
            <a class="edit" href="/features/1/edit">Edit Feature</a>
        </div>
        @endauth
        <div class="section-title">
            <h2>{!! str_replace(["[", "]"], ["<span>", "</span>"], $feature->title) !!}</h2>
        </div>
        <div class="row">
            <!-- feature item -->
            @php
                $features = $feature->featureItems->shuffle();
            @endphp
            <div class="col-md-4 col-sm-4 features">
                @foreach ($features as $key=>$item)
                    @if ($key < 3)
                        <div class="icon-box light left w-full">
                            <div class="service-text w-full" style="min-height: 110px;">
                                <h2>{{ $item->name }}</h2>
                                <p>{{ $item->text }}</p>
                            </div>
                            <div class="icon">
                                <i class="{{ $item->icon }}"></i>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="{{ asset("img/$feature->image") }}" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($features as $key=>$item)
                    @if ($key >= 3 && $key < 6)
                        <div class="icon-box light">
                            <div class="icon">
                                <i class="{{ $item->icon }}"></i>
                            </div>
                            <div class="service-text" style="min-height: 110px;">
                                <h2>{{ $item->name }}b</h2>
                                <p>{{ $item->text }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="text-center mt100">
            <a href="{{ $feature->button_href }}" class="site-btn">{{ $feature->button }}</a>
        </div>
    </div>
</div>
<!-- features section end-->