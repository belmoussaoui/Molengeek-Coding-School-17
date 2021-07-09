<!-- newsletter section -->
@if (count($errors->all()))    
    <div class="m-40 mb-5">
        <div class="p-12 text-center container" style="background-color: #2be6ab;">
            @foreach ($errors->all() as  $message)
            <p class="text-white" style="color: #6a23b5; text-transform: uppercase; font-weight: 600">{{ $message }}</p>
            @endforeach

        </div>
    </div>
@endif

<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form method="post" action="{{ "/newsletter/store" }}" class="nl-form">
                    @csrf
                    <input type="text" name="email" placeholder="Your e-mail here">
                    <button type="submit" class="site-btn btn-2">Newsletter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->
