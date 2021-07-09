<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay" style="{{ "background-image: url(img/$testimonial->image);" }}"></div>
    <div class="container">
        <div class="row">
            @auth
            @if (Auth::user()->canEdit())
                <div class="edit edit-2 ">
                    <a class="edit" href="/testimonial/{{ $testimonial->id }}/edit">Edit Testimonial</a>
                </div>
            @endif
            @endauth
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2>{!! str_replace(["[", "]"], ["<span>", "</span>"], $testimonial->title) !!}</h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    <!-- single testimonial -->
                    @foreach ($testimonial->testimonialItems->shuffle() as $key => $client)
                        @if ($key < 6)
                            <div class="testimonial">
                                <span>‘​‌‘​‌</span>
                                <p style="min-height: 180px;">{{ $client->quote }}</p>
                                <div class="client-info">
                                    <div class="avatar">
                                        <img src={{ asset("img/avatar/$client->avatar")}} alt="">
                                    </div>
                                    <div class="client-name">
                                        <h2>{{ $client->name }}</h2>
                                        <p>{{ $client->job }}</p>
                                    </div>
                                </div>
                            </div>   
                        @endif

                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->