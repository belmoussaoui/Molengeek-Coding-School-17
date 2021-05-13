@extends('layouts.app')

@section('content')
    @include('backoffice.header', ['page' => 'facts'])
    
    <main id="main">
        <section>
        <div class="container">

            <div class="section-title">
                <h2>Edit Portfolio</h2>
            </div>

            <form action="/portfolio/{{ $portfolio->id }}/update" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Image</label>
                        <select class="custom-select" name="image">
                        <option value="portfolio-1.jpg" {{ $portfolio->image === "portfolio-1.jpg" ? "selected" : "" }}>Image 1</option>
                        <option value="portfolio-2.jpg" {{ $portfolio->image === "portfolio-2.jpg" ? "selected" : "" }}>Image 2</option>
                        <option value="portfolio-3.jpg" {{ $portfolio->image === "portfolio-3.jpg" ? "selected" : "" }}>Image 3</option>
                        <option value="portfolio-4.jpg" {{ $portfolio->image === "portfolio-4.jpg" ? "selected" : "" }}>Image 4</option>
                        <option value="portfolio-5.jpg" {{ $portfolio->image === "portfolio-5.jpg" ? "selected" : "" }}>Image 5</option>
                        <option value="portfolio-6.jpg" {{ $portfolio->image === "portfolio-6.jpg" ? "selected" : "" }}>Image 6</option>
                        <option value="portfolio-7.jpg" {{ $portfolio->image === "portfolio-7.jpg" ? "selected" : "" }}>Image 7</option>
                        <option value="portfolio-8.jpg" {{ $portfolio->image === "portfolio-8.jpg" ? "selected" : "" }}>Image 8</option>
                        <option value="portfolio-9.jpg" {{ $portfolio->image === "portfolio-9.jpg" ? "selected" : "" }}>Image 9</option>
                    </select>
                    <div class="">
                        <img id="result" class="img-fluid col-4 my-3 img-thumbnail" src="" alt="">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="custom-select" name="category">
                        <option value="app" {{ $portfolio->category === "app" ? "selected" : "" }}>App</option>
                        <option value="card" {{ $portfolio->category === "card" ? "selected" : "" }}>Card</option>
                        <option value="web" {{ $portfolio->category === "web" ? "selected" : "" }}>Web</option>
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