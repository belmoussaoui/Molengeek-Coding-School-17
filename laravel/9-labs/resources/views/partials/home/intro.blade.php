<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            @auth
                @if (Auth::user()->canEdit())
                    <div class="edit">
                        <a class="edit" href="/hero/{{ $hero->id }}/edit">
                            Edit Hero
                        </a>
                    </div>
                @endif
            @endauth
            {{-- @can('update', $counter) --}}
                {{-- <button style="margin-bottom: 100px" class="site-btn my-3">Edit Hero Section</button> --}}
            {{-- @endcan --}}
            <br>
            <img class="inline-block" src={{ asset("img/$hero->logo") }} style="max-width: 500px" alt="">
            <p>{{ $hero->subtitle }}</p>
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($hero->heroItems as $item)
            <div class="item hero-item" data-bg={{ asset("img/$item->image") }}></div>       
        @endforeach
    </div>
</div>
<!-- Intro Section -->