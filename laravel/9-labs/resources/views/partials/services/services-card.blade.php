<!-- services card section-->
<div class="services-card-section spad">
    <div class="container">
        <div class="row">
            @foreach ($posts as $key => $post)
                @if ($key < 3)
                    <!-- Single Card -->
                    <div class="col-md-4 col-sm-6">
                        <div class="sv-card">
                            <div class="card-img">
                                <img src="{{ asset("img/blog/$post->thumbnail") }}" alt="">
                            </div>
                            <div class="card-text">
                                <h2>{{ $post->title }}</h2>
                                <p>{{ Str::limit($post->content, 100, '...') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
<!-- services card section end-->