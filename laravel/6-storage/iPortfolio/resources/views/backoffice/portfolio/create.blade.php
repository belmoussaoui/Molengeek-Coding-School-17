@extends('layouts.app')

@section('content')
    @include('backoffice.header', ['page' => 'portfolio'])
    
    <main id="main">
        <section>
        <div class="container">

            <div class="section-title">
                <h2>Create Portfolio</h2>
            </div>

            <form action="/portfolio/store" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Image</label>
                        <select class="custom-select" name="image">
                        <option value="portfolio-1.jpg">Image 1</option>
                        <option value="portfolio-2.jpg">Image 2</option>
                        <option value="portfolio-3.jpg">Image 3</option>
                        <option value="portfolio-4.jpg">Image 4</option>
                        <option value="portfolio-5.jpg">Image 5</option>
                        <option value="portfolio-6.jpg">Image 6</option>
                        <option value="portfolio-7.jpg">Image 7</option>
                        <option value="portfolio-8.jpg">Image 8</option>
                        <option value="portfolio-9.jpg">Image 9</option>
                    </select>
                    <div class="">
                        <img id="result" class="img-fluid col-4 my-3 img-thumbnail" src="/img/portfolio/portfolio-1.jpg" alt="">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="custom-select" name="category">
                        <option value="app" selected>App</option>
                        <option value="card">Card</option>
                        <option value="web">Web</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </section>
    </main>
@endsection

<script>
window.onload = function() {
    let select = document.querySelector("select");
    const img = document.getElementById("result");
    img.src = `/img/portfolio/${select.value}`;
    select.addEventListener("change", event => {
        const img = document.getElementById("result");
        img.src = `/img/portfolio/${event.target.value}`;
    })
}
</script>