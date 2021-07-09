<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                @foreach ($service->serviceItems->shuffle() as $key => $item)
                    @if ($key < 3)
                        <!-- single card -->
                        <div class="col-md-4 col-sm-6">
                            <div class="lab-card">
                                <div class="icon">
                                    <i class="{{ $item->icon }}"></i>
                                </div>
                                <h2>{{ $item->title }}</h2>
                                <p>{{ $item->text }}</p>
                            </div>
                        </div>
                    
                    @endif
                @endforeach
               
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            @auth
                @if (Auth::user()->canEdit())
                <div class="edit edit-2">
                    <a class="edit" href="/about/{{ $about->id }}/edit">Edit About</a>
                </div>
                @endif
            @endauth
            <div class="section-title">
                <h2>{!! str_replace(["[", "]"], ["<span>", "</span>"], $about->title) !!}</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>{{ $about->paragraph1 }}</p>
                </div>
                <div class="col-md-6">
                    <p>{{ $about->paragraph2 }}</p>
                </div>
            </div>
            <div class="text-center mt60">
                <a href="{{ $about->button_href }}" class="site-btn">{{ $about->button }}</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <img src={{ asset("img/$about->video_image") }} alt="">                           
                        <a href="{{ $about->video_href }}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->