<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            {{-- @can('update', $counter) --}}
                <a style="margin-bottom: 100px" class="site-btn my-3" href="/hero/{{ $hero->id }}/edit">Edit Hero</a>
                {{-- <button style="margin-bottom: 100px" class="site-btn my-3">Edit Hero Section</button> --}}
            {{-- @endcan --}}
            <br>
            <img src={{ asset("img/$hero->logo") }} alt="">
            <p>{{ $hero->subtitle }}</p>
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($hero->heroItems as $item)
            <div class="item  hero-item" data-bg={{ asset("img/$item->image") }}></div>       
        @endforeach
    </div>
</div>
<!-- Intro Section -->