<!-- Promotion section -->
<div class="promotion-section" id="promotion">
    <div class="container">
        <div class="row">
             @auth
                @if (Auth::user()->canEdit())
                    <div class="edit">
                        <a class="edit-2" href="/promotion/1/edit">
                            Edit Promotion
                        </a>
                    </div>
                @endif
            @endauth
            <div class="col-md-9">
                <h2>{{ $promotion->title }}</h2>
                <p>{{ $promotion->text }}</p>
            </div>
            <div class="col-md-3">
                <div class="promo-btn-area">
                    <a href="{{ $promotion->button_href }}" class="site-btn btn-2">{{ $promotion->button }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Promotion section end-->